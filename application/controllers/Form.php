<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('data_model');
	}



	public function index()
	{
		$this->load->view('home/header');
		$this->load->view('home/form_view', array('error' => ' '));
		$this->load->view('home/footer');
	}


	public function adding()
	{

		// echo '<pre>';
		// print_r($_POST);
		// echo '</pre>';

		$this->form_validation->set_rules(
			'case_type',
			'ประเภทปัญหา',
			'trim|required|min_length[1]',
			array('required' => 'กรุณากรอกข้อมูล %s.', 'min_length' => 'กรุณากรอกข้อมูลขั้นต่ำ 1 ตัว')
		);
		$this->form_validation->set_rules(
			'case_detail',
			'รายละเอียดปัญหา',
			'trim|required|min_length[5]',
			array('required' => 'กรุณากรอกข้อมูล %s.', 'min_length' => 'กรุณากรอกข้อมูลขั้นต่ำ 5 ตัว')
		);
		$this->form_validation->set_rules(
			'case_loc',
			'สถานที่',
			'trim|required|min_length[5]',
			array('required' => 'กรุณากรอกข้อมูล %s.', 'min_length' => 'กรุณากรอกข้อมูลขั้นต่ำ 5 ตัว')
		);
		$this->form_validation->set_rules(
			'p_name',
			'ชื่อผู้แจ้ง',
			'trim|required|min_length[3]',
			array('required' => 'กรุณากรอกข้อมูล %s.', 'min_length' => 'กรุณากรอกข้อมูลขั้นต่ำ 3 ตัว')
		);
		$this->form_validation->set_rules(
			'p_email',
			'อีเมล',
			'trim|required|valid_email',
			array('required' => 'กรุณากรอกข้อมูล %s.', 'valid_email' => 'รูปแบบอีเมล์ไม่ถูกต้อง')
		);


		if ($this->form_validation->run() == FALSE) {

			$this->load->view('home/header');
			$this->load->view('home/form_view', array('error' => ' '));
			$this->load->view('home/footer');
		} else {
			//img
			$config['upload_path'] = 'asset/uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['encrypt_name'] = TRUE;

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('p_img')) {
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('home/header');
				$this->load->view('home/form_view', $error);
				$this->load->view('home/footer');
			} else {
				$this->data_model->insert_case();
				$data['qlastid'] = $this->data_model->lastid($_POST['p_email']);
				$this->session->set_flashdata('save_success', TRUE);
				redirect('form/detail/' . $data['qlastid']->id, 'refresh');
			}
		}  //}else{

	}

	public function detail($id)
	{
		$data['rs_detail'] = $this->data_model->get_detail($id);
		//print_r($data);
		$this->load->view('home/header');
		$this->load->view('home/form_detail', $data);
		$this->load->view('home/footer');
	}

	public function allcase()
	{
		$data['query'] = $this->data_model->all();
		$this->load->view('home/header');
		$this->load->view('home/list_case_view', $data);
		$this->load->view('home/footer');
	}
}
