<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		$this->load->model('LoginModel');
	}

	public function index()
	{
		$this->load->view('admin/dashboard');
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function login_process() {
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if($this->form_validation->run() == TRUE) {
			$data = array(
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password'))
			);

			$result = $this->LoginModel->login($data);
			if(count($result) > 0) {
				$this->session->set_userdata($result);
				redirect('Admin/main');
			}else{
				redirect('main/login');
			}
		}else{
			redirect('main/login');
		}

	}

	public function register() {
		$data['GetAllGender'] = $this->LoginModel->GetAllGender();
		$this->load->view('register', $data);
	}

	public function register_process() {
		$this->form_validation->set_rules('fullname', 'Full Name', 'trim|required');
		$this->form_validation->set_rules('gender', 'Gender', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('password2', 'Retry Password', 'trim|required');

		if($this->form_validation->run() == TRUE) {
			if($this->input->post('password') == $this->input->post('password2')) {
				$getcode = $this->LoginModel->get_kode();
				$data = array(
					'id_user' => "USER".$getcode,
					'level_id' => '2',
					'fullname' => $this->input->post('fullname'),
					'gender' => $this->input->post('gender'),
					'email' => $this->input->post('email'),
					'password' => md5($this->input->post('password')),
					'create_time' => date('Y-m-d H:i:s')
				);

				$result = $this->LoginModel->register($data);
				if($result == TRUE) {
					$output = array(
						'status' => true,
						'message' => 'Resgitesr Success'
					);
				}else{
					$output = array(
						'status' => false,
						'message' => 'Resgitesr Failed'
					);
				}
			}else{
				$output = array(
					'status' => false,
					'message' => 'Password not macth'
				);
			}
		}else{
			$output = array(
				'status' => false,
				'message' => 'Required'
			);
		}
		echo json_encode($output);
	}
}
