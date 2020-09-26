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
		$this->load->view('index');
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
			if(count($result->result()) > 0) { 
				$arr = $result->row_array(); 
				if($arr['level_id'] == 1) {
					$data_session = array(
						'id_user' => $arr['id_user'],
						'nama' => $arr['fullname'],
						'level' => $arr['level_id'],
						'email' => $arr['email'],
						'status' => True
						);
						
					$this->session->set_userdata($data_session);
					redirect(base_url("index.php/Admin/main"));
				} else {
					$data_session = array(
						'id_user' => $arr['id_user'],
						'nama' => $arr['fullname'],
						'level' => $arr['level_id'],
						'email' => $arr['email'],
						'status' => True
						);

					$this->session->set_userdata($data_session);
					redirect(base_url("index.php/User/main"));
				}
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

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/main/login'));
	}
}
