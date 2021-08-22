<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin_model extends CI_Model
{

    public function fetch_user_login($username, $password)
    {
        $this->db->where('admin_email', $username);
        $this->db->where('admin_pwd', $password);
        $query = $this->db->get('tbl_admin');
        return $query->row();
    }

    public function list_all()
    {
        $query = $this->db->get('tbl_admin');
        return $query->result();
    }


    public function insert_admin()
    {
        $data = array(
            'admin_name' => $this->input->post('admin_name'),
            'admin_email' => $this->input->post('admin_email'),
            'admin_pwd' => sha1($this->input->post('admin_pwd'))
        );
        $query = $this->db->insert('tbl_admin', $data);
    }


    //show form edit
    public function read($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('tbl_admin');
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function update_admin()
    {
        $data = array(
            'admin_name' => $this->input->post('admin_name'),
            'admin_status' => $this->input->post('admin_status')
        );
        $this->db->where('id', $this->input->post('id'));
        $query = $this->db->update('tbl_admin', $data);
    }


    public function update_pwd_admin()
    {
        $data = array(
            'admin_pwd' => sha1($this->input->post('admin_pwd1'))
        );
        $this->db->where('id', $this->input->post('id'));
        $query = $this->db->update('tbl_admin', $data);
    }


    public function del_admin($id)
    {
        $this->db->delete('tbl_admin', array('id' => $id));
    }
}
