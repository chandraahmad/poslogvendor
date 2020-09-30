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

	public function GetByidAllVehicle() {
		if(isset($_GET['vendor_id'])) {
			$vendor_id = $_GET['vendor_id'];
			if($vendor_id != NULL) {
				$data['GetByidAllVehicle'] = $this->PoslogApiVendorModel->get_byid_all_vehicle($vendor_id);
				if($data['GetByidAllVehicle'] != NULL) {
					$output = array(
						'condition' => true,
						'message' => 'Data available',
						'data' => $data['GetByidAllVehicle']
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

	public function GetByidAllGeneral() {
		if(isset($_GET['vendor_id'])) {
			$vendor_id = $_GET['vendor_id'];
			if($vendor_id != NULL) {
				$data['GetByidAllGeneral'] = $this->PoslogApiVendorModel->get_byid_all_general($vendor_id);
				if($data['GetByidAllGeneral'] != NULL) {
					$output = array(
						'condition' => true,
						'message' => 'Data available',
						'data' => $data['GetByidAllGeneral']
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

	public function GetByidAllSertifikat() {
		if(isset($_GET['vendor_id'])) {
			$vendor_id = $_GET['vendor_id'];
			if($vendor_id != NULL) {
				$data['GetByidAllSertifikat'] = $this->PoslogApiVendorModel->get_byid_all_sertifikat($vendor_id);
				if($data['GetByidAllSertifikat'] != NULL) {
					$output = array(
						'condition' => true,
						'message' => 'Data available',
						'data' => $data['GetByidAllSertifikat']
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

	public function GetAllAsset() {
		$data['GetAllAsset'] = $this->PoslogApiVendorModel->get_all_asset();
		if($data['GetAllAsset'] != NULL) {
			$output = array(
				'condition' => true,
				'message' => 'Data available',
				'data' => $data['GetAllAsset']
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

	public function UploadFileDokumen()
	{
		$nmfile = $_FILES['file']['name'];
		if (file_exists('./assets/images/Upload/'.$nmfile)){
			@unlink('./assets/images/Upload/'.$nmfile);
		}
		
		$config['upload_path'] = './assets/dokumen/situ';
		$config['file_name'] = $nmfile;
        $config['allowed_types'] = '*';
        $config['max_size'] = 2000;
        $config['max_width'] = 7024;
        $config['max_height'] = 7680;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload('file')) {
			$file = $this->upload->data();
			$output = array(
				'condition' => true,
				'message' => 'Upload Successfully',
				'data' => null
			);
		} else {
			$output = array(
				'condition' => false,
				'message' => 'Upload Failed',
				'data' => $this->upload->display_errors()
			);
		}
		
		header('Access-Control-Allow-Origin: *');
		header('Access-Control-Allow-Method: PUT, GET, POST, DELETE, OPTIONS');
		header('Access-Control-Allow-Headers: Content-Type, x-xsrf-token');
		echo json_encode($output);
	}

	public function VehicleProcess() {
		$postdata = file_get_contents("php://input");
		$dataObject = json_decode($postdata);
		$data = array(
			'vendor_id' => $dataObject->vendor_id,
			'vehicle_type' => $dataObject->vehicle_type,
			'vehicle_brand' => $dataObject->vehicle_brand,
			'vehicle_qty' => $dataObject->vehicle_qty,
			'vehicle_year' => $dataObject->vehicle_year,
			'type' => $dataObject->type,
			'vehicle_payload' => $dataObject->vehicle_payload,
			'vehicle_status' => $dataObject->vehicle_status,
			'vehicle_history' => $dataObject->vehicle_history
		);
		$result = $this->PoslogApiVendorModel->insert_vehicle($data);
		if($result == TRUE) {
			$output = array(
				'condition' => true,
				'message' => 'Data kendaraan berhasil disimpan',
				'data' => null
			);
		}else{
			$output = array(
				'condition' => false,
				'message' => 'Data kendaraan gagal disimpan',
				'data' => null
			);
		}

		echo json_encode($output);
	}

	public function GeneralProcess() {
		$postdata = file_get_contents("php://input");
		$dataObject = json_decode($postdata);
		$data = array(
			'vendor_id' => $dataObject->vendor_id,
			'general_type' => $dataObject->general_type,
			'general_qty' => $dataObject->general_qty,
			'general_status' => $dataObject->general_status
		);
		$result = $this->PoslogApiVendorModel->insert_general($data);
		if($result == TRUE) {
			$output = array(
				'condition' => true,
				'message' => 'Data general berhasil disimpan',
				'data' => null
			);
		}else{
			$output = array(
				'condition' => false,
				'message' => 'Data general gagal disimpan',
				'data' => null
			);
		}

		echo json_encode($output);
	}

	public function SertifikatProcess() {
		$postdata = file_get_contents("php://input");
		$dataObject = json_decode($postdata);
		$data = array(
			'vendor_id' => $dataObject->vendor_id,
			'awards_type' => $dataObject->awards_type,
			'awards_year' => $dataObject->awards_year,
			'awards_num' => $dataObject->awards_num
		);
		$result = $this->PoslogApiVendorModel->insert_sertifikat($data);
		if($result == TRUE) {
			$output = array(
				'condition' => true,
				'message' => 'Data general berhasil disimpan',
				'data' => null
			);
		}else{
			$output = array(
				'condition' => false,
				'message' => 'Data general gagal disimpan',
				'data' => null
			);
		}

		echo json_encode($output);
	}

	public function DeleteVehile() {
		if(isset($_GET['vehicle_id'])) {
			$vehicle_id = $_GET['vehicle_id'];
			if($vehicle_id != NULL) {
				$result = $this->PoslogApiVendorModel->delete_vehicle($vehicle_id);
				if($result == TRUE) {
					$output = array(
						'condition' => true,
						'message' => 'Data kendaraan berhasil dihapus',
						'data' => null
					);
				}else{
					$output = array(
						'condition' => false,
						'message' => 'Data kendaraan gagal dihapus',
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

	public function DeleteGeneral() {
		if(isset($_GET['general_id'])) {
			$general_id = $_GET['general_id'];
			if($general_id != NULL) {
				$result = $this->PoslogApiVendorModel->delete_general($general_id);
				if($result == TRUE) {
					$output = array(
						'condition' => true,
						'message' => 'Data general berhasil dihapus',
						'data' => null
					);
				}else{
					$output = array(
						'condition' => false,
						'message' => 'Data general gagal dihapus',
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

	public function DeleteSertifikat() {
		if(isset($_GET['awards_id'])) {
			$awards_id = $_GET['awards_id'];
			if($awards_id != NULL) {
				$result = $this->PoslogApiVendorModel->delete_awards($awards_id);
				if($result == TRUE) {
					$output = array(
						'condition' => true,
						'message' => 'Data sertifikat berhasil dihapus',
						'data' => null
					);
				}else{
					$output = array(
						'condition' => false,
						'message' => 'Data sertifikat gagal dihapus',
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
}
