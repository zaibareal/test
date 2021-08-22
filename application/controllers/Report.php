<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Report extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //chk admin status
        if ($this->session->userdata('admin_status') != 1) {
            redirect('login/logout', 'refresh');
        }
        $this->load->model('data_model');
    }

    public function index()
    {
        $data['queryreport'] = $this->data_model->countbycasetype();
        $data['querystatus'] = $this->data_model->countbycasestatus();
        $this->load->view('template/header');
        $this->load->view('backend/report_view', $data);
        $this->load->view('template/footer');
    }
}
