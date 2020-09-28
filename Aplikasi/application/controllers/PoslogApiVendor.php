<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PoslogApiVendor extends CI_Controller {

	public function __construct() {
		parent::__construct();
		header('Access-Control-Allow-Origin: *');
		header('Access-Control-Allow-Method: PUT, GET, POST, DELETE, OPTIONS');
		header('Access-Control-Allow-Headers: Content-Type, x-xsrf-token');
		$this->load->model('PoslogApiVendorModel');
	}
	
	public function GetByidUser() {
		$postdata = file_get_contents("php://input");
		$dataObject = json_decode($postdata);
		if($dataObject->email != NULL && $dataObject->password != NULL) {
			$data['GetByidUser'] = $this->PoslogApiVendorModel->get_byid_user($dataObject->email, md5($dataObject->password));
			if($data['GetByidUser'] != NULL) {
				$output = array(
					'condition' => true,
					'message' => 'Welcome '.$data['GetByidUser']->fullname,
					'data' => $data['GetByidUser']
				);
			}else{
				$output = array(
					'condition' => false,
					'message' => 'Data not available',
					'data' => null
				);
			}
		}else{
			$output = array(
				'condition' => false,
				'message' => 'Wrong parameter',
				'data' => null
			);
		}

		echo json_encode($output);
	}

	public function GetByidUser2() {
		$postdata = file_get_contents("php://input");
		$dataObject = json_decode($postdata);
		if($dataObject->email != NULL && $dataObject->password != NULL) {
			$data['GetByidUser'] = $this->PoslogApiVendorModel->get_byid_user($dataObject->email, $dataObject->password);
			if($data['GetByidUser'] != NULL) {
				$output = array(
					'condition' => true,
					'message' => 'Welcome '.$data['GetByidUser']->fullname,
					'data' => $data['GetByidUser']
				);
			}else{
				$output = array(
					'condition' => false,
					'message' => 'Data not available',
					'data' => null
				);
			}
		}else{
			$output = array(
				'condition' => false,
				'message' => 'Wrong parameter',
				'data' => null
			);
		}

		echo json_encode($output);
	}

	public function GetAllBusinessField() {
		$data['GetAllBusinessField'] = $this->PoslogApiVendorModel->get_all_business_field();
		if($data['GetAllBusinessField'] != NULL) {
			$output = array(
				'condition' => true,
				'message' => 'Data available',
				'data' => $data['GetAllBusinessField']
			);
		}else{
			$output = array(
				'condition' => false,
				'message' => 'Data not available',
				'data' => null
			);
		}

		echo json_encode($output);
	}

	public function GetByidAllCategory() {
		if(isset($_GET['business_field_id'])) {
			$business_field_id = $_GET['business_field_id'];
			if($business_field_id != NULL) {
				$data['GetByidAllCategory'] = $this->PoslogApiVendorModel->get_byid_all_category($business_field_id);
				if($data['GetByidAllCategory'] != NULL) {
					$output = array(
						'condition' => true,
						'message' => 'Data available',
						'data' => $data['GetByidAllCategory']
					);
				}else{
					$output = array(
						'condition' => false,
						'message' => 'Data not available',
						'data' => null
					);
				}
			}else{
				$output = array(
					'condition' => false,
					'message' => 'Wrong parameter',
					'data' => null
				);
			}
		}else{
			$output = array(
				'condition' => false,
				'message' => 'Wrong parameter',
				'data' => null
			);
		}

		echo json_encode($output);
	}

	public function GetByidVendor() {
		if(isset($_GET['id_user'])) {
			$id_user = $_GET['id_user'];
			if($id_user != NULL) {
				$data['GetByidVendor'] = $this->PoslogApiVendorModel->get_byid_vendor($id_user);
				if($data['GetByidVendor'] != NULL) {
					$output = array(
						'condition' => true,
						'message' => 'Data available',
						'data' => $data['GetByidVendor']
					);
				}else{
					$output = array(
						'condition' => false,
						'message' => 'Data not available',
						'data' => null
					);
				}
			}else{
				$output = array(
					'condition' => false,
					'message' => 'Wrong parameter',
					'data' => null
				);
			}
		}else{
			$output = array(
				'condition' => false,
				'message' => 'Wrong parameter',
				'data' => null
			);
		}

		echo json_encode($output);
	}

	public function GetAllGender() {
		$data['GetAllGender'] = $this->PoslogApiVendorModel->get_all_gender();
		if($data['GetAllGender'] != NULL) {
			$output = array(
				'condition' => true,
				'message' => 'Data available',
				'data' => $data['GetAllGender']
			);
		}else{
			$output = array(
				'condition' => false,
				'message' => 'Data not available',
				'data' => null
			);
		}

		echo json_encode($output);
	}

	public function RegisterProcess() {
		$postdata = file_get_contents("php://input");
		$dataObject = json_decode($postdata);
		$getcode = $this->PoslogApiVendorModel->get_kode();
		$data = array(
			'id_user' => "USER".$getcode,
			'level_id' => '2',
			'fullname' => $dataObject->fullname,
			'gender' => $dataObject->gender,
			'email' => $dataObject->email,
			'password' => md5($dataObject->password),
			'create_time' => date('Y-m-d H:i:s')
		);
		$result = $this->PoslogApiVendorModel->register($data);
		if($result == TRUE) {
			$output = array(
				'condition' => true,
				'message' => 'Register success',
				'data' => null
			);
		}else{
			$output = array(
				'condition' => false,
				'message' => 'Register failed',
				'data' => null
			);
		}

		echo json_encode($output);
	}

	public function UpdateProfileProcess() {
		$postdata = file_get_contents("php://input");
		$dataObject = json_decode($postdata);
		$data = array(
			'id_user' => $dataObject->id_user,
			'fullname' => $dataObject->fullname,
			'gender' => $dataObject->gender,
			'email' => $dataObject->email,
			'update_time' => date('Y-m-d H:i:s')
		);
		$result = $this->PoslogApiVendorModel->update_profile($data);
		if($result == TRUE) {
			$output = array(
				'condition' => true,
				'message' => 'Update profile success',
				'data' => null
			);
		}else{
			$output = array(
				'condition' => false,
				'message' => 'Update profile failed',
				'data' => null
			);
		}

		echo json_encode($output);
	}

	public function UpdatePasswordProcess() {
		$postdata = file_get_contents("php://input");
		$dataObject = json_decode($postdata);
		$data = array(
			'id_user' => $dataObject->id_user,
			'password' => md5($dataObject->password2),
			'update_time' => date('Y-m-d H:i:s')
		);
		$result = $this->PoslogApiVendorModel->update_profile($data);
		if($result == TRUE) {
			$data['GetByidUser'] = $this->PoslogApiVendorModel->get_byid_user($dataObject->email, md5($dataObject->password2));
			$output = array(
				'condition' => true,
				'message' => 'Change password success',
				'data' => $data['GetByidUser']
			);
		}else{
			$output = array(
				'condition' => false,
				'message' => 'Change password failed',
				'data' => null
			);
		}

		echo json_encode($output);
	}

	public function AdministrationProcess() {
		$postdata = file_get_contents("php://input");
		$dataObject = json_decode($postdata);
		$getcode = $this->PoslogApiVendorModel->get_kode_vendor();
		$data = array(
			'vendor_id' => 'VENDOR'.$getcode,
			'vendor_name' => $dataObject->vendor_name,
			'address' => $dataObject->address,
			'postcode' => $dataObject->postcode,
			'vendor_fax' => $dataObject->vendor_fax,
			'vendor_phone' => $dataObject->vendor_phone,
			'vendor_email' => $dataObject->vendor_email,
			'vendor_website' => $dataObject->vendor_website,
			'business_field_id' => $dataObject->business_field_id,
			'category_id' => $dataObject->category_id,
			'vendor_desc' => $dataObject->vendor_desc,
			'id_user' => $dataObject->id_user,
			'founding_date' => date('Y-m-d'),
			'vendor_status' => '1'
		);
		$GetByidVendor = $this->PoslogApiVendorModel->get_byid_vendor($dataObject->id_user);
		if($GetByidVendor != NULL) {
			$result = $this->PoslogApiVendorModel->update_administration($data);
		}else{
			$result = $this->PoslogApiVendorModel->insert_administration($data);
		}
		if($result == TRUE) {
			$output = array(
				'condition' => true,
				'message' => 'Administration saved',
				'data' => null
			);
		}else{
			$output = array(
				'condition' => false,
				'message' => 'Administration failed',
				'data' => null
			);
		}

		echo json_encode($output);
	}
}
