<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
    }

    public function index()
    {
        $this->load->view('home/header');
        $this->load->view('home/login_view', array('error' => ' '));
        $this->load->view('home/footer');
    }

    public function authen()
    {

        if ($this->input->post('admin_email') == '') {
            redirect('login', 'refresh');
        } else {
            $result = $this->admin_model->fetch_user_login(
                $this->input->post('admin_email'),
                sha1($this->input->post('admin_pwd'))
            );

            if (!empty($result)) {
                //create session var & value
                $sess = array(
                    'id'            => $result->id,
                    'admin_status'        => $result->admin_status,
                    'admin_name'        => $result->admin_name
                );

                $this->session->set_userdata($sess);
                //admin status
                $admin_status = $_SESSION['admin_status'];
                if ($admin_status == 1) {
                    //echo 'r u admin';
                    redirect('jobs', 'refresh');
                } else {
                    //u not admin
                    $this->session->set_flashdata('login_error', TRUE);
                    $this->session->unset_userdata(array('id', 'admin_status', 'admin_name'));
                    redirect('login', 'refresh');
                }
            } else {
                $this->session->set_flashdata('login_error', TRUE);
                $this->session->unset_userdata(array('id', 'admin_status', 'admin_name'));
                redirect('login', 'refresh');
            }
        }
    }

    public function logout()
    {
        $this->session->set_flashdata('logout_success', TRUE);
        $this->session->unset_userdata(array('id', 'admin_status', 'admin_name'));
        redirect('', 'refresh');
    }
}
