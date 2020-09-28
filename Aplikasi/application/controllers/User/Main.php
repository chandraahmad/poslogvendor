<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    function __construct(){
		parent::__construct();		
		$this->load->model('user_model');

        if ($this->session->userdata('level') == 2) {
			
		} else {
			redirect(base_url("index.php/main/logout"));
        }
        $this->load->library('parser');
		$this->load->helper('directory');
	}
	public function index()
	{
        $data['dokumen'] = $this->db->query("SELECT COUNT(*) AS jumlah from document")->row_array();
        $data['kendaraan'] = $this->db->query("SELECT COUNT(*) AS jumlah from vehicle")->row_array();
        $data['general'] = $this->db->query("SELECT COUNT(*) AS jumlah from general")->row_array();
        $data['awards'] = $this->db->query("SELECT COUNT(*) AS jumlah from awards")->row_array();
		$data['view'] = 'user/dashboard';
		$this->load->view('user/layout', $data);
    }
    
	public function administrasi()
	{
        $data['business_field'] = $this->db->query("SELECT * FROM business_field")->result();
        $data['category'] = $this->db->query("SELECT * FROM category")->result();
		$data['view'] = 'user/administrasi';
		$this->load->view('user/layout', $data);
    }

	public function dokumen()
	{
        $id_user = $this->session->userdata('id_user');  
        $query = $this->db->query("SELECT vendor_id from vendor WHERE id_user = '$id_user'")->row_array(); 
        $vendor_id = $query['vendor_id'];

        //Legalitas Perusahaan
        $data['akta'] = $this->db->query("SELECT * FROM document WHERE vendor_id = '$vendor_id' AND doc_type LIKE 'Akta pendirian perusahaan'")->row_array();
        $data['kemenkumham'] = $this->db->query("SELECT * FROM document WHERE vendor_id = '$vendor_id' AND doc_type LIKE 'Pengesahan Kemenkumham'")->row_array();
        $data['siup'] = $this->db->query("SELECT * FROM document WHERE vendor_id = '$vendor_id' AND doc_type LIKE 'Surat Ijin Usaha'")->row_array();
        $data['tdp'] = $this->db->query("SELECT * FROM document WHERE vendor_id = '$vendor_id' AND doc_type LIKE 'TDP'")->row_array();
        $data['npwp'] = $this->db->query("SELECT * FROM document WHERE vendor_id = '$vendor_id' AND doc_type LIKE 'NPWP'")->row_array();
        $data['sppkp'] = $this->db->query("SELECT * FROM document WHERE vendor_id = '$vendor_id' AND doc_type LIKE 'SPPKP'")->row_array();
        $data['situ'] = $this->db->query("SELECT * FROM document WHERE vendor_id = '$vendor_id' AND doc_type LIKE 'Surat Izin Tempat Usaha'")->row_array();

        //Referensi Bank
        $data['ref'] = $this->db->query("SELECT * FROM document WHERE vendor_id = '$vendor_id' AND doc_type LIKE 'Referensi Bank'")->row_array();
        $data['audit'] = $this->db->query("SELECT * FROM document WHERE vendor_id = '$vendor_id' AND doc_type LIKE 'Laporan Keuangan Perusahaan 2 tahun terakhir'")->row_array();

        //Surat Pernyataan
        $data['mitra'] = $this->db->query("SELECT * FROM document WHERE vendor_id = '$vendor_id' AND doc_type LIKE 'Surat Permohonan Menjadi Mitra Kerja Poslog'")->row_array();
        $data['pernyataan'] = $this->db->query("SELECT * FROM document WHERE vendor_id = '$vendor_id' AND doc_type LIKE 'Surat Pernyataan'")->row_array();
        $data['pi'] = $this->db->query("SELECT * FROM document WHERE vendor_id = '$vendor_id' AND doc_type LIKE 'Surat Pakta Integritas'")->row_array();
        $data['ptpp'] = $this->db->query("SELECT * FROM document WHERE vendor_id = '$vendor_id' AND doc_type LIKE 'Surat Pernyataan tidak dalam pengawasan pengadilan'")->row_array();
        $data['kemampuan'] = $this->db->query("SELECT * FROM document WHERE vendor_id = '$vendor_id' AND doc_type LIKE 'Surat pernyataan Memiliki kemampuan menyediakan Fasilitas'")->row_array();

        //CSMS Vendor
        $data['csms'] = $this->db->query("SELECT * FROM document WHERE vendor_id = '$vendor_id' AND doc_type LIKE 'Formulir CSMS'")->row_array();

        //Company Profile
        $data['cp'] = $this->db->query("SELECT * FROM document WHERE vendor_id = '$vendor_id' AND doc_type LIKE 'Company Profile'")->row_array();
        $data['logo'] = $this->db->query("SELECT * FROM document WHERE vendor_id = '$vendor_id' AND doc_type LIKE 'Logo Perusahaan'")->row_array();

		$data['view'] = 'user/dokumen';
		$this->load->view('user/layout', $data);
    }
    
    public function add_admin()
    {
        $this->form_validation->set_rules('vendor_name','Nama Perusahaan','required');
		$this->form_validation->set_rules('founding_date','Tahun Didirikan','required');
		$this->form_validation->set_rules('address','Alamat Perusahaan','required');
		$this->form_validation->set_rules('postcode','Kode Pos','required');
		$this->form_validation->set_rules('vendor_email','E-mail','required');
		$this->form_validation->set_rules('vendor_phone','Telepon','required');
		$this->form_validation->set_rules('vendor_fax','Fax','required');
		$this->form_validation->set_rules('business_field_id','Bidang Usaha','required');
		$this->form_validation->set_rules('category_id','Kategori','required');
		$this->form_validation->set_rules('vendor_desc','Deskripsi Perusahaan','required');
 
		if($this->form_validation->run() != false){
            date_default_timezone_set('Asia/Jakarta');
            $kode = $this->user_model->get_kode();
			$data = array(
                'vendor_id' => "VENDOR".$kode,
                'id_user' => $this->session->userdata('id_user'),
                'business_field_id' => $this->input->post('business_field_id'),
                'category_id' => $this->input->post('category_id'),
                'office_id' => "",
                'vendor_name' => $this->input->post('vendor_name'),
                'vendor_desc' => $this->input->post('vendor_desc'),
                'founding_date' => $this->input->post('founding_date'),
                'address' => $this->input->post('address'),
                'postcode' => $this->input->post('postcode'),
                'vendor_email' => $this->input->post('vendor_email'),
                'vendor_phone' => $this->input->post('vendor_phone'),
                'vendor_fax' => $this->input->post('vendor_fax'),
                'vendor_website' => $this->input->post('vendor_website'),
                'vendor_status' => 1
                );

                $log = array(
                    'log_id' => "",
                    'id_user' => $this->session->userdata('id_user'),
                    'log_desc' => "User menambahkan data administrasi vendor",
                    'log_time' => date("Y-m-d H:i:s")
                );

            $this->user_model->add_admin($data,'vendor');
            $this->user_model->log($log,'log');
            redirect(base_url("index.php/user/main/administrasi"));
		}else{
			$data['view'] = 'user/administrasi';
		    $this->load->view('user/layout', $data);
		}
    }

    public function add_akta()
    {
        $id_user = $this->session->userdata('id_user');        
        $query = $this->db->query("SELECT vendor_id from vendor WHERE id_user = '$id_user'")->row_array();

        $config['upload_path']          = './assets/dokumen';
		$config['allowed_types']        = 'pdf|doc|docx';
        $config['max_size']             = 10000;
        

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

		if (!$this->upload->do_upload('doc_file')) {
            $error = array('error' => $this->upload->display_errors());
            
            $output = array(
                'status' => true,
                'message' => $this->upload->display_errors()
            );
		} else {
            $data = array('upload_data' => $this->upload->data());
			$up = array(
				'doc_id' => "",
				'vendor_id' => $query['vendor_id'],
				'doc_type' => "Akta pendirian perusahaan",
				'doc_file' => $this->upload->data("file_name"),
				'doc_status' => 1
            );
            $log = array(
                'log_id' => "",
                'id_user' => $this->session->userdata('id_user'),
                'log_desc' => "User menambahkan Akta pendirian perusahaan",
                'log_time' => date("Y-m-d H:i:s")
            );
            $this->user_model->log($log,'log');
            $this->user_model->add_dokumen($up, 'document');
        
            if($data == TRUE) {
                $output = array(
                    'status' => true,
                    'message' => 'Sukses Menambah File Perusahaan'
                );
            }else{
                $output = array(
                    'status' => false,
                    'message' => 'Gagal Menambah File Perusahaan'
                );
            } 
        }
        echo json_encode($output);
    }

    public function add_kemenkumham()
    {
        $id_user = $this->session->userdata('id_user');        
        $query = $this->db->query("SELECT vendor_id from vendor WHERE id_user = '$id_user'")->row_array();

        $config['upload_path']          = './assets/dokumen';
		$config['allowed_types']        = 'pdf|doc|docx';
        $config['max_size']             = 10000;
        

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

		if (!$this->upload->do_upload('doc_file')) {
            $error = array('error' => $this->upload->display_errors());
            
            $output = array(
                'status' => true,
                'message' => $this->upload->display_errors()
            );
		} else {
            $data = array('upload_data' => $this->upload->data());
			$up = array(
				'doc_id' => "",
				'vendor_id' => $query['vendor_id'],
				'doc_type' => "Pengesahan Kemenkumham",
				'doc_file' => $this->upload->data("file_name"),
				'doc_status' => 1
            );
            $log = array(
                'log_id' => "",
                'id_user' => $this->session->userdata('id_user'),
                'log_desc' => "User menambahkan Pengesahan Kemenkumham",
                'log_time' => date("Y-m-d H:i:s")
            );
            $this->user_model->log($log,'log');
            $this->user_model->add_dokumen($up, 'document');
        
            if($data == TRUE) {
                $output = array(
                    'status' => true,
                    'message' => 'Sukses Menambah File Perusahaan'
                );
            }else{
                $output = array(
                    'status' => false,
                    'message' => 'Gagal Menambah File Perusahaan'
                );
            } 
        }
        echo json_encode($output);
    }

    public function add_siup()
    {
        $id_user = $this->session->userdata('id_user');        
        $query = $this->db->query("SELECT vendor_id from vendor WHERE id_user = '$id_user'")->row_array();

        $config['upload_path']          = './assets/dokumen';
		$config['allowed_types']        = 'pdf|doc|docx';
        $config['max_size']             = 10000;
        

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

		if (!$this->upload->do_upload('doc_file')) {
            $error = array('error' => $this->upload->display_errors());
            
            $output = array(
                'status' => true,
                'message' => $this->upload->display_errors()
            );
		} else {
            $data = array('upload_data' => $this->upload->data());
			$up = array(
				'doc_id' => "",
				'vendor_id' => $query['vendor_id'],
				'doc_type' => "Surat Ijin Usaha",
				'doc_file' => $this->upload->data("file_name"),
				'doc_status' => 1
            );
            $log = array(
                'log_id' => "",
                'id_user' => $this->session->userdata('id_user'),
                'log_desc' => "User menambahkan Surat Ijin Usaha",
                'log_time' => date("Y-m-d H:i:s")
            );
            $this->user_model->log($log,'log');
            $this->user_model->add_dokumen($up, 'document');
        
            if($data == TRUE) {
                $output = array(
                    'status' => true,
                    'message' => 'Sukses Menambah File Perusahaan'
                );
            }else{
                $output = array(
                    'status' => false,
                    'message' => 'Gagal Menambah File Perusahaan'
                );
            } 
        }
        echo json_encode($output);
    }

    public function add_tdp()
    {
        $id_user = $this->session->userdata('id_user');        
        $query = $this->db->query("SELECT vendor_id from vendor WHERE id_user = '$id_user'")->row_array();

        $config['upload_path']          = './assets/dokumen';
		$config['allowed_types']        = 'pdf|doc|docx';
        $config['max_size']             = 10000;
        

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

		if (!$this->upload->do_upload('doc_file')) {
            $error = array('error' => $this->upload->display_errors());
            
            $output = array(
                'status' => true,
                'message' => $this->upload->display_errors()
            );
		} else {
            $data = array('upload_data' => $this->upload->data());
			$up = array(
				'doc_id' => "",
				'vendor_id' => $query['vendor_id'],
				'doc_type' => "TDP",
				'doc_file' => $this->upload->data("file_name"),
				'doc_status' => 1
            );
            $log = array(
                'log_id' => "",
                'id_user' => $this->session->userdata('id_user'),
                'log_desc' => "User menambahkan TDP",
                'log_time' => date("Y-m-d H:i:s")
            );
            $this->user_model->log($log,'log');
            $this->user_model->add_dokumen($up, 'document');
        
            if($data == TRUE) {
                $output = array(
                    'status' => true,
                    'message' => 'Sukses Menambah File Perusahaan'
                );
            }else{
                $output = array(
                    'status' => false,
                    'message' => 'Gagal Menambah File Perusahaan'
                );
            } 
        }
        echo json_encode($output);
    }

    public function add_npwp()
    {
        $id_user = $this->session->userdata('id_user');        
        $query = $this->db->query("SELECT vendor_id from vendor WHERE id_user = '$id_user'")->row_array();

        $config['upload_path']          = './assets/dokumen';
		$config['allowed_types']        = 'pdf|doc|docx';
        $config['max_size']             = 10000;
        

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

		if (!$this->upload->do_upload('doc_file')) {
            $error = array('error' => $this->upload->display_errors());
            
            $output = array(
                'status' => true,
                'message' => $this->upload->display_errors()
            );
		} else {
            $data = array('upload_data' => $this->upload->data());
			$up = array(
				'doc_id' => "",
				'vendor_id' => $query['vendor_id'],
				'doc_type' => "NPWP",
				'doc_file' => $this->upload->data("file_name"),
				'doc_status' => 1
            );
            $log = array(
                'log_id' => "",
                'id_user' => $this->session->userdata('id_user'),
                'log_desc' => "User menambahkan NPWP",
                'log_time' => date("Y-m-d H:i:s")
            );
            $this->user_model->log($log,'log');
            $this->user_model->add_dokumen($up, 'document');
        
            if($data == TRUE) {
                $output = array(
                    'status' => true,
                    'message' => 'Sukses Menambah File Perusahaan'
                );
            }else{
                $output = array(
                    'status' => false,
                    'message' => 'Gagal Menambah File Perusahaan'
                );
            } 
        }
        echo json_encode($output);
    }

    public function add_sppkp()
    {
        $id_user = $this->session->userdata('id_user');        
        $query = $this->db->query("SELECT vendor_id from vendor WHERE id_user = '$id_user'")->row_array();

        $config['upload_path']          = './assets/dokumen';
		$config['allowed_types']        = 'pdf|doc|docx';
        $config['max_size']             = 10000;
        

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

		if (!$this->upload->do_upload('doc_file')) {
            $error = array('error' => $this->upload->display_errors());
            
            $output = array(
                'status' => true,
                'message' => $this->upload->display_errors()
            );
		} else {
            $data = array('upload_data' => $this->upload->data());
			$up = array(
				'doc_id' => "",
				'vendor_id' => $query['vendor_id'],
				'doc_type' => "SPPKP",
				'doc_file' => $this->upload->data("file_name"),
				'doc_status' => 1
            );
            $log = array(
                'log_id' => "",
                'id_user' => $this->session->userdata('id_user'),
                'log_desc' => "User menambahkan SPPKP",
                'log_time' => date("Y-m-d H:i:s")
            );
            $this->user_model->log($log,'log');
            $this->user_model->add_dokumen($up, 'document');
        
            if($data == TRUE) {
                $output = array(
                    'status' => true,
                    'message' => 'Sukses Menambah File Perusahaan'
                );
            }else{
                $output = array(
                    'status' => false,
                    'message' => 'Gagal Menambah File Perusahaan'
                );
            } 
        }
        echo json_encode($output);
    }

    public function add_situ()
    {
        $id_user = $this->session->userdata('id_user');        
        $query = $this->db->query("SELECT vendor_id from vendor WHERE id_user = '$id_user'")->row_array();

        $config['upload_path']          = './assets/dokumen';
		$config['allowed_types']        = 'pdf|doc|docx';
        $config['max_size']             = 10000;
        

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

		if (!$this->upload->do_upload('doc_file')) {
            $error = array('error' => $this->upload->display_errors());
            
            $output = array(
                'status' => true,
                'message' => $this->upload->display_errors()
            );
		} else {
            $data = array('upload_data' => $this->upload->data());
			$up = array(
				'doc_id' => "",
				'vendor_id' => $query['vendor_id'],
				'doc_type' => "Surat Izin Tempat Usaha",
				'doc_file' => $this->upload->data("file_name"),
				'doc_status' => 1
            );
            $log = array(
                'log_id' => "",
                'id_user' => $this->session->userdata('id_user'),
                'log_desc' => "User menambahkan Surat Izin Tempat Usaha",
                'log_time' => date("Y-m-d H:i:s")
            );
            $this->user_model->log($log,'log');
            $this->user_model->add_dokumen($up, 'document');
        
            if($data == TRUE) {
                $output = array(
                    'status' => true,
                    'message' => 'Sukses Menambah File Perusahaan'
                );
            }else{
                $output = array(
                    'status' => false,
                    'message' => 'Gagal Menambah File Perusahaan'
                );
            } 
        }
        echo json_encode($output);
    }

    public function add_ref()
    {
        $id_user = $this->session->userdata('id_user');        
        $query = $this->db->query("SELECT vendor_id from vendor WHERE id_user = '$id_user'")->row_array();

        $config['upload_path']          = './assets/dokumen';
		$config['allowed_types']        = 'pdf|doc|docx';
        $config['max_size']             = 10000;
        

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

		if (!$this->upload->do_upload('doc_file')) {
            $error = array('error' => $this->upload->display_errors());
            
            $output = array(
                'status' => true,
                'message' => $this->upload->display_errors()
            );
		} else {
            $data = array('upload_data' => $this->upload->data());
			$up = array(
				'doc_id' => "",
				'vendor_id' => $query['vendor_id'],
				'doc_type' => "Referensi Bank",
				'doc_file' => $this->upload->data("file_name"),
				'doc_status' => 1
            );
            $log = array(
                'log_id' => "",
                'id_user' => $this->session->userdata('id_user'),
                'log_desc' => "User menambahkan Referensi Bank",
                'log_time' => date("Y-m-d H:i:s")
            );
            $this->user_model->log($log,'log');
            $this->user_model->add_dokumen($up, 'document');
        
            if($data == TRUE) {
                $output = array(
                    'status' => true,
                    'message' => 'Sukses Menambah File Perusahaan'
                );
            }else{
                $output = array(
                    'status' => false,
                    'message' => 'Gagal Menambah File Perusahaan'
                );
            } 
        }
        echo json_encode($output);
    }

    public function add_audit()
    {
        $id_user = $this->session->userdata('id_user');        
        $query = $this->db->query("SELECT vendor_id from vendor WHERE id_user = '$id_user'")->row_array();

        $config['upload_path']          = './assets/dokumen';
		$config['allowed_types']        = 'pdf|doc|docx';
        $config['max_size']             = 10000;
        

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

		if (!$this->upload->do_upload('doc_file')) {
            $error = array('error' => $this->upload->display_errors());
            
            $output = array(
                'status' => true,
                'message' => $this->upload->display_errors()
            );
		} else {
            $data = array('upload_data' => $this->upload->data());
			$up = array(
				'doc_id' => "",
				'vendor_id' => $query['vendor_id'],
				'doc_type' => "Laporan Keuangan Perusahaan 2 tahun terakhir",
				'doc_file' => $this->upload->data("file_name"),
				'doc_status' => 1
            );
            $log = array(
                'log_id' => "",
                'id_user' => $this->session->userdata('id_user'),
                'log_desc' => "User menambahkan Laporan Keuangan Perusahaan 2 tahun terakhir",
                'log_time' => date("Y-m-d H:i:s")
            );
            $this->user_model->log($log,'log');
            $this->user_model->add_dokumen($up, 'document');
        
            if($data == TRUE) {
                $output = array(
                    'status' => true,
                    'message' => 'Sukses Menambah File Perusahaan'
                );
            }else{
                $output = array(
                    'status' => false,
                    'message' => 'Gagal Menambah File Perusahaan'
                );
            } 
        }
        echo json_encode($output);
    }

    public function add_mitra()
    {
        $id_user = $this->session->userdata('id_user');        
        $query = $this->db->query("SELECT vendor_id from vendor WHERE id_user = '$id_user'")->row_array();

        $config['upload_path']          = './assets/dokumen';
		$config['allowed_types']        = 'pdf|doc|docx';
        $config['max_size']             = 10000;
        

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

		if (!$this->upload->do_upload('doc_file')) {
            $error = array('error' => $this->upload->display_errors());
            
            $output = array(
                'status' => true,
                'message' => $this->upload->display_errors()
            );
		} else {
            $data = array('upload_data' => $this->upload->data());
			$up = array(
				'doc_id' => "",
				'vendor_id' => $query['vendor_id'],
				'doc_type' => "Surat Permohonan Menjadi Mitra Kerja Poslog",
				'doc_file' => $this->upload->data("file_name"),
				'doc_status' => 1
            );
            $log = array(
                'log_id' => "",
                'id_user' => $this->session->userdata('id_user'),
                'log_desc' => "User menambahkan Surat Permohonan Menjadi Mitra Kerja Poslog",
                'log_time' => date("Y-m-d H:i:s")
            );
            $this->user_model->log($log,'log');
            $this->user_model->add_dokumen($up, 'document');
        
            if($data == TRUE) {
                $output = array(
                    'status' => true,
                    'message' => 'Sukses Menambah File Perusahaan'
                );
            }else{
                $output = array(
                    'status' => false,
                    'message' => 'Gagal Menambah File Perusahaan'
                );
            } 
        }
        echo json_encode($output);
    }

    public function add_pernyataan()
    {
        $id_user = $this->session->userdata('id_user');        
        $query = $this->db->query("SELECT vendor_id from vendor WHERE id_user = '$id_user'")->row_array();

        $config['upload_path']          = './assets/dokumen';
		$config['allowed_types']        = 'pdf|doc|docx';
        $config['max_size']             = 10000;
        

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

		if (!$this->upload->do_upload('doc_file')) {
            $error = array('error' => $this->upload->display_errors());
            
            $output = array(
                'status' => true,
                'message' => $this->upload->display_errors()
            );
		} else {
            $data = array('upload_data' => $this->upload->data());
			$up = array(
				'doc_id' => "",
				'vendor_id' => $query['vendor_id'],
				'doc_type' => "Surat Pernyataan",
				'doc_file' => $this->upload->data("file_name"),
				'doc_status' => 1
            );
            $log = array(
                'log_id' => "",
                'id_user' => $this->session->userdata('id_user'),
                'log_desc' => "User menambahkan Surat Pernyataan",
                'log_time' => date("Y-m-d H:i:s")
            );
            $this->user_model->log($log,'log');
            $this->user_model->add_dokumen($up, 'document');
        
            if($data == TRUE) {
                $output = array(
                    'status' => true,
                    'message' => 'Sukses Menambah File Perusahaan'
                );
            }else{
                $output = array(
                    'status' => false,
                    'message' => 'Gagal Menambah File Perusahaan'
                );
            } 
        }
        echo json_encode($output);
    }

    public function add_pi()
    {
        $id_user = $this->session->userdata('id_user');        
        $query = $this->db->query("SELECT vendor_id from vendor WHERE id_user = '$id_user'")->row_array();

        $config['upload_path']          = './assets/dokumen';
		$config['allowed_types']        = 'pdf|doc|docx';
        $config['max_size']             = 10000;
        

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

		if (!$this->upload->do_upload('doc_file')) {
            $error = array('error' => $this->upload->display_errors());
            
            $output = array(
                'status' => true,
                'message' => $this->upload->display_errors()
            );
		} else {
            $data = array('upload_data' => $this->upload->data());
			$up = array(
				'doc_id' => "",
				'vendor_id' => $query['vendor_id'],
				'doc_type' => "Surat Pakta Integritas",
				'doc_file' => $this->upload->data("file_name"),
				'doc_status' => 1
            );
            $log = array(
                'log_id' => "",
                'id_user' => $this->session->userdata('id_user'),
                'log_desc' => "User menambahkan Surat Pakta Integritas",
                'log_time' => date("Y-m-d H:i:s")
            );
            $this->user_model->log($log,'log');
            $this->user_model->add_dokumen($up, 'document');
        
            if($data == TRUE) {
                $output = array(
                    'status' => true,
                    'message' => 'Sukses Menambah File Perusahaan'
                );
            }else{
                $output = array(
                    'status' => false,
                    'message' => 'Gagal Menambah File Perusahaan'
                );
            } 
        }
        echo json_encode($output);
    }

    public function add_ptpp()
    {
        $id_user = $this->session->userdata('id_user');        
        $query = $this->db->query("SELECT vendor_id from vendor WHERE id_user = '$id_user'")->row_array();

        $config['upload_path']          = './assets/dokumen';
		$config['allowed_types']        = 'pdf|doc|docx';
        $config['max_size']             = 10000;
        

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

		if (!$this->upload->do_upload('doc_file')) {
            $error = array('error' => $this->upload->display_errors());
            
            $output = array(
                'status' => true,
                'message' => $this->upload->display_errors()
            );
		} else {
            $data = array('upload_data' => $this->upload->data());
			$up = array(
				'doc_id' => "",
				'vendor_id' => $query['vendor_id'],
				'doc_type' => "Surat Pernyataan tidak dalam pengawasan pengadilan",
				'doc_file' => $this->upload->data("file_name"),
				'doc_status' => 1
            );
            $log = array(
                'log_id' => "",
                'id_user' => $this->session->userdata('id_user'),
                'log_desc' => "User menambahkan Surat Pernyataan tidak dalam pengawasan pengadilan",
                'log_time' => date("Y-m-d H:i:s")
            );
            $this->user_model->log($log,'log');
            $this->user_model->add_dokumen($up, 'document');
        
            if($data == TRUE) {
                $output = array(
                    'status' => true,
                    'message' => 'Sukses Menambah File Perusahaan'
                );
            }else{
                $output = array(
                    'status' => false,
                    'message' => 'Gagal Menambah File Perusahaan'
                );
            } 
        }
        echo json_encode($output);
    }

    public function add_kemampuan()
    {
        $id_user = $this->session->userdata('id_user');        
        $query = $this->db->query("SELECT vendor_id from vendor WHERE id_user = '$id_user'")->row_array();

        $config['upload_path']          = './assets/dokumen';
		$config['allowed_types']        = 'pdf|doc|docx';
        $config['max_size']             = 10000;
        

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

		if (!$this->upload->do_upload('doc_file')) {
            $error = array('error' => $this->upload->display_errors());
            
            $output = array(
                'status' => true,
                'message' => $this->upload->display_errors()
            );
		} else {
            $data = array('upload_data' => $this->upload->data());
			$up = array(
				'doc_id' => "",
				'vendor_id' => $query['vendor_id'],
				'doc_type' => "Surat pernyataan Memiliki kemampuan menyediakan Fasilitas",
				'doc_file' => $this->upload->data("file_name"),
				'doc_status' => 1
            );
            $log = array(
                'log_id' => "",
                'id_user' => $this->session->userdata('id_user'),
                'log_desc' => "User menambahkan Surat pernyataan Memiliki kemampuan menyediakan Fasilitas",
                'log_time' => date("Y-m-d H:i:s")
            );
            $this->user_model->log($log,'log');
            $this->user_model->add_dokumen($up, 'document');
        
            if($data == TRUE) {
                $output = array(
                    'status' => true,
                    'message' => 'Sukses Menambah File Perusahaan'
                );
            }else{
                $output = array(
                    'status' => false,
                    'message' => 'Gagal Menambah File Perusahaan'
                );
            } 
        }
        echo json_encode($output);
    }

    public function add_csms()
    {
        $id_user = $this->session->userdata('id_user');        
        $query = $this->db->query("SELECT vendor_id from vendor WHERE id_user = '$id_user'")->row_array();

        $config['upload_path']          = './assets/dokumen';
		$config['allowed_types']        = 'pdf|doc|docx';
        $config['max_size']             = 10000;
        

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

		if (!$this->upload->do_upload('doc_file')) {
            $error = array('error' => $this->upload->display_errors());
            
            $output = array(
                'status' => true,
                'message' => $this->upload->display_errors()
            );
		} else {
            $data = array('upload_data' => $this->upload->data());
			$up = array(
				'doc_id' => "",
				'vendor_id' => $query['vendor_id'],
				'doc_type' => "Formulir CSMS",
				'doc_file' => $this->upload->data("file_name"),
				'doc_status' => 1
            );
            $log = array(
                'log_id' => "",
                'id_user' => $this->session->userdata('id_user'),
                'log_desc' => "User menambahkan Formulir CSMS",
                'log_time' => date("Y-m-d H:i:s")
            );
            $this->user_model->log($log,'log');
            $this->user_model->add_dokumen($up, 'document');
        
            if($data == TRUE) {
                $output = array(
                    'status' => true,
                    'message' => 'Sukses Menambah File Perusahaan'
                );
            }else{
                $output = array(
                    'status' => false,
                    'message' => 'Gagal Menambah File Perusahaan'
                );
            } 
        }
        echo json_encode($output);
    }

    public function add_cp()
    {
        $id_user = $this->session->userdata('id_user');        
        $query = $this->db->query("SELECT vendor_id from vendor WHERE id_user = '$id_user'")->row_array();

        $config['upload_path']          = './assets/dokumen';
		$config['allowed_types']        = 'pdf|doc|docx';
        $config['max_size']             = 10000;
        

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

		if (!$this->upload->do_upload('doc_file')) {
            $error = array('error' => $this->upload->display_errors());
            
            $output = array(
                'status' => true,
                'message' => $this->upload->display_errors()
            );
		} else {
            $data = array('upload_data' => $this->upload->data());
			$up = array(
				'doc_id' => "",
				'vendor_id' => $query['vendor_id'],
				'doc_type' => "Company Profile",
				'doc_file' => $this->upload->data("file_name"),
				'doc_status' => 1
            );
            $log = array(
                'log_id' => "",
                'id_user' => $this->session->userdata('id_user'),
                'log_desc' => "User menambahkan Company Profile",
                'log_time' => date("Y-m-d H:i:s")
            );
            $this->user_model->log($log,'log');
            $this->user_model->add_dokumen($up, 'document');
        
            if($data == TRUE) {
                $output = array(
                    'status' => true,
                    'message' => 'Sukses Menambah File Perusahaan'
                );
            }else{
                $output = array(
                    'status' => false,
                    'message' => 'Gagal Menambah File Perusahaan'
                );
            } 
        }
        echo json_encode($output);
    }

    public function add_logo()
    {
        $id_user = $this->session->userdata('id_user');        
        $query = $this->db->query("SELECT vendor_id from vendor WHERE id_user = '$id_user'")->row_array();

        $config['upload_path']          = './assets/dokumen';
		$config['allowed_types']        = 'pdf|doc|docx';
        $config['max_size']             = 10000;
        

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

		if (!$this->upload->do_upload('doc_file')) {
            $error = array('error' => $this->upload->display_errors());
            
            $output = array(
                'status' => true,
                'message' => $this->upload->display_errors()
            );
		} else {
            $data = array('upload_data' => $this->upload->data());
			$up = array(
				'doc_id' => "",
				'vendor_id' => $query['vendor_id'],
				'doc_type' => "Logo Perusahaan",
				'doc_file' => $this->upload->data("file_name"),
				'doc_status' => 1
            );
            $log = array(
                'log_id' => "",
                'id_user' => $this->session->userdata('id_user'),
                'log_desc' => "User menambahkan Logo Perusahaan",
                'log_time' => date("Y-m-d H:i:s")
            );
            $this->user_model->log($log,'log');
            $this->user_model->add_dokumen($up, 'document');
        
            if($data == TRUE) {
                $output = array(
                    'status' => true,
                    'message' => 'Sukses Menambah File Perusahaan'
                );
            }else{
                $output = array(
                    'status' => false,
                    'message' => 'Gagal Menambah File Perusahaan'
                );
            } 
        }
        echo json_encode($output);
    }

    public function edit_akta()
    {
        $id_user = $this->session->userdata('id_user');        
        $query = $this->db->query("SELECT vendor_id from vendor WHERE id_user = '$id_user'")->row_array();

        $config['upload_path']          = './assets/dokumen';
		$config['allowed_types']        = 'pdf|doc|docx';
        $config['max_size']             = 10000;
        

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

		if (!$this->upload->do_upload('doc_file')) {
            $error = array('error' => $this->upload->display_errors());
            
            $output = array(
                'status' => true,
                'message' => $this->upload->display_errors()
            );
		} else {
            $data = array('upload_data' => $this->upload->data());
            $doc_file = $this->upload->data("file_name");
            $vendor_id = $query['vendor_id'];
            $log = array(
                'log_id' => "",
                'id_user' => $this->session->userdata('id_user'),
                'log_desc' => "User mengedit Akta Perusahaan",
                'log_time' => date("Y-m-d H:i:s")
            );
            $this->user_model->log($log,'log');
            $this->db->query("UPDATE document SET doc_file = '$doc_file' WHERE vendor_id = '$vendor_id' AND doc_type = 'Akta pendirian perusahaan'");
        
            if($data == TRUE) {
                $output = array(
                    'status' => true,
                    'message' => 'Sukses Menambah File Perusahaan'
                );
            }else{
                $output = array(
                    'status' => false,
                    'message' => 'Gagal Menambah File Perusahaan'
                );
            } 
        }
        echo json_encode($output);
    }

    public function edit_kemenkumham()
    {
        $id_user = $this->session->userdata('id_user');        
        $query = $this->db->query("SELECT vendor_id from vendor WHERE id_user = '$id_user'")->row_array();

        $config['upload_path']          = './assets/dokumen';
		$config['allowed_types']        = 'pdf|doc|docx';
        $config['max_size']             = 10000;
        

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

		if (!$this->upload->do_upload('doc_file')) {
            $error = array('error' => $this->upload->display_errors());
            
            $output = array(
                'status' => true,
                'message' => $this->upload->display_errors()
            );
		} else {
            $data = array('upload_data' => $this->upload->data());
            $doc_file = $this->upload->data("file_name");
            $vendor_id = $query['vendor_id'];
            $log = array(
                'log_id' => "",
                'id_user' => $this->session->userdata('id_user'),
                'log_desc' => "User mengedit Pengesahan Kemenkumham",
                'log_time' => date("Y-m-d H:i:s")
            );
            $this->user_model->log($log,'log');
            $this->db->query("UPDATE document SET doc_file = '$doc_file' WHERE vendor_id = '$vendor_id' AND doc_type = 'Pengesahan Kemenkumham'");
        
            if($data == TRUE) {
                $output = array(
                    'status' => true,
                    'message' => 'Sukses Menambah File Perusahaan'
                );
            }else{
                $output = array(
                    'status' => false,
                    'message' => 'Gagal Menambah File Perusahaan'
                );
            } 
        }
        echo json_encode($output);
    }

    public function edit_siup()
    {
        $id_user = $this->session->userdata('id_user');        
        $query = $this->db->query("SELECT vendor_id from vendor WHERE id_user = '$id_user'")->row_array();

        $config['upload_path']          = './assets/dokumen';
		$config['allowed_types']        = 'pdf|doc|docx';
        $config['max_size']             = 10000;
        

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

		if (!$this->upload->do_upload('doc_file')) {
            $error = array('error' => $this->upload->display_errors());
            
            $output = array(
                'status' => true,
                'message' => $this->upload->display_errors()
            );
		} else {
            $data = array('upload_data' => $this->upload->data());
            $doc_file = $this->upload->data("file_name");
            $vendor_id = $query['vendor_id'];
            $log = array(
                'log_id' => "",
                'id_user' => $this->session->userdata('id_user'),
                'log_desc' => "User mengedit Surat Ijin Usaha",
                'log_time' => date("Y-m-d H:i:s")
            );
            $this->user_model->log($log,'log');
            $this->db->query("UPDATE document SET doc_file = '$doc_file' WHERE vendor_id = '$vendor_id' AND doc_type = 'Surat Ijin Usaha'");
        
            if($data == TRUE) {
                $output = array(
                    'status' => true,
                    'message' => 'Sukses Menambah File Perusahaan'
                );
            }else{
                $output = array(
                    'status' => false,
                    'message' => 'Gagal Menambah File Perusahaan'
                );
            } 
        }
        echo json_encode($output);
    }

    public function edit_tdp()
    {
        $id_user = $this->session->userdata('id_user');        
        $query = $this->db->query("SELECT vendor_id from vendor WHERE id_user = '$id_user'")->row_array();

        $config['upload_path']          = './assets/dokumen';
		$config['allowed_types']        = 'pdf|doc|docx';
        $config['max_size']             = 10000;
        

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

		if (!$this->upload->do_upload('doc_file')) {
            $error = array('error' => $this->upload->display_errors());
            
            $output = array(
                'status' => true,
                'message' => $this->upload->display_errors()
            );
		} else {
            $data = array('upload_data' => $this->upload->data());
            $doc_file = $this->upload->data("file_name");
            $vendor_id = $query['vendor_id'];
            $log = array(
                'log_id' => "",
                'id_user' => $this->session->userdata('id_user'),
                'log_desc' => "User mengedit TDP",
                'log_time' => date("Y-m-d H:i:s")
            );
            $this->user_model->log($log,'log');
            $this->db->query("UPDATE document SET doc_file = '$doc_file' WHERE vendor_id = '$vendor_id' AND doc_type = 'TDP'");
        
            if($data == TRUE) {
                $output = array(
                    'status' => true,
                    'message' => 'Sukses Menambah File Perusahaan'
                );
            }else{
                $output = array(
                    'status' => false,
                    'message' => 'Gagal Menambah File Perusahaan'
                );
            } 
        }
        echo json_encode($output);
    }

    public function edit_npwp()
    {
        $id_user = $this->session->userdata('id_user');        
        $query = $this->db->query("SELECT vendor_id from vendor WHERE id_user = '$id_user'")->row_array();

        $config['upload_path']          = './assets/dokumen';
		$config['allowed_types']        = 'pdf|doc|docx';
        $config['max_size']             = 10000;
        

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

		if (!$this->upload->do_upload('doc_file')) {
            $error = array('error' => $this->upload->display_errors());
            
            $output = array(
                'status' => true,
                'message' => $this->upload->display_errors()
            );
		} else {
            $data = array('upload_data' => $this->upload->data());
            $doc_file = $this->upload->data("file_name");
            $vendor_id = $query['vendor_id'];
            $log = array(
                'log_id' => "",
                'id_user' => $this->session->userdata('id_user'),
                'log_desc' => "User mengedit NPWP",
                'log_time' => date("Y-m-d H:i:s")
            );
            $this->user_model->log($log,'log');
            $this->db->query("UPDATE document SET doc_file = '$doc_file' WHERE vendor_id = '$vendor_id' AND doc_type = 'NPWP'");
        
            if($data == TRUE) {
                $output = array(
                    'status' => true,
                    'message' => 'Sukses Menambah File Perusahaan'
                );
            }else{
                $output = array(
                    'status' => false,
                    'message' => 'Gagal Menambah File Perusahaan'
                );
            } 
        }
        echo json_encode($output);
    }

    public function edit_sppkp()
    {
        $id_user = $this->session->userdata('id_user');        
        $query = $this->db->query("SELECT vendor_id from vendor WHERE id_user = '$id_user'")->row_array();

        $config['upload_path']          = './assets/dokumen';
		$config['allowed_types']        = 'pdf|doc|docx';
        $config['max_size']             = 10000;
        

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

		if (!$this->upload->do_upload('doc_file')) {
            $error = array('error' => $this->upload->display_errors());
            
            $output = array(
                'status' => true,
                'message' => $this->upload->display_errors()
            );
		} else {
            $data = array('upload_data' => $this->upload->data());
            $doc_file = $this->upload->data("file_name");
            $vendor_id = $query['vendor_id'];
            $log = array(
                'log_id' => "",
                'id_user' => $this->session->userdata('id_user'),
                'log_desc' => "User mengedit SPPKP",
                'log_time' => date("Y-m-d H:i:s")
            );
            $this->user_model->log($log,'log');
            $this->db->query("UPDATE document SET doc_file = '$doc_file' WHERE vendor_id = '$vendor_id' AND doc_type = 'SPPKP'");
        
            if($data == TRUE) {
                $output = array(
                    'status' => true,
                    'message' => 'Sukses Menambah File Perusahaan'
                );
            }else{
                $output = array(
                    'status' => false,
                    'message' => 'Gagal Menambah File Perusahaan'
                );
            } 
        }
        echo json_encode($output);
    }

    public function edit_situ()
    {
        $id_user = $this->session->userdata('id_user');        
        $query = $this->db->query("SELECT vendor_id from vendor WHERE id_user = '$id_user'")->row_array();

        $config['upload_path']          = './assets/dokumen';
		$config['allowed_types']        = 'pdf|doc|docx';
        $config['max_size']             = 10000;
        

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

		if (!$this->upload->do_upload('doc_file')) {
            $error = array('error' => $this->upload->display_errors());
            
            $output = array(
                'status' => true,
                'message' => $this->upload->display_errors()
            );
		} else {
            $data = array('upload_data' => $this->upload->data());
            $doc_file = $this->upload->data("file_name");
            $vendor_id = $query['vendor_id'];
            $log = array(
                'log_id' => "",
                'id_user' => $this->session->userdata('id_user'),
                'log_desc' => "User mengedit Surat Izin tempat Usaha",
                'log_time' => date("Y-m-d H:i:s")
            );
            $this->user_model->log($log,'log');
            $this->db->query("UPDATE document SET doc_file = '$doc_file' WHERE vendor_id = '$vendor_id' AND doc_type = 'Surat Izin Tempat Usaha'");
        
            if($data == TRUE) {
                $output = array(
                    'status' => true,
                    'message' => 'Sukses Menambah File Perusahaan'
                );
            }else{
                $output = array(
                    'status' => false,
                    'message' => 'Gagal Menambah File Perusahaan'
                );
            } 
        }
        echo json_encode($output);
    }

    public function edit_ref()
    {
        $id_user = $this->session->userdata('id_user');        
        $query = $this->db->query("SELECT vendor_id from vendor WHERE id_user = '$id_user'")->row_array();

        $config['upload_path']          = './assets/dokumen';
		$config['allowed_types']        = 'pdf|doc|docx';
        $config['max_size']             = 10000;
        

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

		if (!$this->upload->do_upload('doc_file')) {
            $error = array('error' => $this->upload->display_errors());
            
            $output = array(
                'status' => true,
                'message' => $this->upload->display_errors()
            );
		} else {
            $data = array('upload_data' => $this->upload->data());
            $doc_file = $this->upload->data("file_name");
            $vendor_id = $query['vendor_id'];
            $log = array(
                'log_id' => "",
                'id_user' => $this->session->userdata('id_user'),
                'log_desc' => "User mengedit Referensi Bank",
                'log_time' => date("Y-m-d H:i:s")
            );
            $this->user_model->log($log,'log');
            $this->db->query("UPDATE document SET doc_file = '$doc_file' WHERE vendor_id = '$vendor_id' AND doc_type = 'Referensi Bank'");
        
            if($data == TRUE) {
                $output = array(
                    'status' => true,
                    'message' => 'Sukses Menambah File Perusahaan'
                );
            }else{
                $output = array(
                    'status' => false,
                    'message' => 'Gagal Menambah File Perusahaan'
                );
            } 
        }
        echo json_encode($output);
    }

    public function edit_audit()
    {
        $id_user = $this->session->userdata('id_user');        
        $query = $this->db->query("SELECT vendor_id from vendor WHERE id_user = '$id_user'")->row_array();

        $config['upload_path']          = './assets/dokumen';
		$config['allowed_types']        = 'pdf|doc|docx';
        $config['max_size']             = 10000;
        

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

		if (!$this->upload->do_upload('doc_file')) {
            $error = array('error' => $this->upload->display_errors());
            
            $output = array(
                'status' => true,
                'message' => $this->upload->display_errors()
            );
		} else {
            $data = array('upload_data' => $this->upload->data());
            $doc_file = $this->upload->data("file_name");
            $vendor_id = $query['vendor_id'];
            $log = array(
                'log_id' => "",
                'id_user' => $this->session->userdata('id_user'),
                'log_desc' => "User mengedit Laporan Keuangan Perusahaan 2 tahun terakhir",
                'log_time' => date("Y-m-d H:i:s")
            );
            $this->user_model->log($log,'log');
            $this->db->query("UPDATE document SET doc_file = '$doc_file' WHERE vendor_id = '$vendor_id' AND doc_type = 'Laporan Keuangan Perusahaan 2 tahun terakhir'");
        
            if($data == TRUE) {
                $output = array(
                    'status' => true,
                    'message' => 'Sukses Menambah File Perusahaan'
                );
            }else{
                $output = array(
                    'status' => false,
                    'message' => 'Gagal Menambah File Perusahaan'
                );
            } 
        }
        echo json_encode($output);
    }

    public function kendaraan()
	{
        $data['kendaraan'] = $this->db->query("SELECT * FROM vehicle JOIN vendor ON vehicle.vendor_id = vendor.vendor_id");
		$data['view'] = 'user/kendaraan';
		$this->load->view('user/layout', $data);
    }

    public function add_kendaraan()
    {
        $this->form_validation->set_rules('vehicle_type','Jenis Kendaraan','required');
		$this->form_validation->set_rules('vehicle_brand','Merk Kendaraan','required');
		$this->form_validation->set_rules('vehicle_qty','Quantity Kendaraan','required');
		$this->form_validation->set_rules('vehicle_year','Tahun Kendaraan','required');
		$this->form_validation->set_rules('type','Tipe Kendaraan','required');
		$this->form_validation->set_rules('vehicle_payload','Payload Kendaraan','required');
		$this->form_validation->set_rules('vehicle_status','Status Kendaraan','required');
		$this->form_validation->set_rules('vehicle_history','Service History Kendaraan','required');
 
		if($this->form_validation->run() != false){
            $id_user = $this->session->userdata('id_user');        
            $query = $this->db->query("SELECT vendor_id from vendor WHERE id_user = '$id_user'")->row_array();

			$data = array(
                'vendor_id' => $query['vendor_id'],
                'vehicle_type' => $this->input->post('vehicle_type'),
                'vehicle_brand' => $this->input->post('vehicle_brand'),
                'vehicle_qty' => $this->input->post('vehicle_qty'),
                'vehicle_year' => $this->input->post('vehicle_year'),
                'type' => $this->input->post('type'),
                'vehicle_payload' => $this->input->post('vehicle_payload'),
                'vehicle_status' => $this->input->post('vehicle_status'),
                'vehicle_history' => $this->input->post('vehicle_history')
                );

                $log = array(
                    'log_id' => "",
                    'id_user' => $this->session->userdata('id_user'),
                    'log_desc' => "User menambahkan data asset kendaraan",
                    'log_time' => date("Y-m-d H:i:s")
                );

            $this->user_model->add_admin($data,'vehicle');
            $this->user_model->log($log,'log');
            redirect(base_url("index.php/user/main/kendaraan"));
		}else{
			redirect(base_url("index.php/user/main/kendaraan"));
		}
    }

    public function edit_kendaraan()
    {
        $this->form_validation->set_rules('vehicle_id','Vehicle ID','required');
        $this->form_validation->set_rules('vendor_id','Vendor ID','required');
        $this->form_validation->set_rules('vehicle_type','Jenis Kendaraan','required');
		$this->form_validation->set_rules('vehicle_brand','Merk Kendaraan','required');
		$this->form_validation->set_rules('vehicle_qty','Quantity Kendaraan','required');
		$this->form_validation->set_rules('vehicle_year','Tahun Kendaraan','required');
		$this->form_validation->set_rules('type','Tipe Kendaraan','required');
		$this->form_validation->set_rules('vehicle_payload','Payload Kendaraan','required');
		$this->form_validation->set_rules('vehicle_status','Status Kendaraan','required');
		$this->form_validation->set_rules('vehicle_history','Service History Kendaraan','required');
 
		if($this->form_validation->run() != false){
                $vehicle_id = $this->input->post('vehicle_id');
                $vendor_id = $this->input->post('vendor_id');
                $vehicle_type = $this->input->post('vehicle_type');
                $vehicle_brand = $this->input->post('vehicle_brand');
                $vehicle_qty = $this->input->post('vehicle_qty');
                $vehicle_year = $this->input->post('vehicle_year');
                $type = $this->input->post('type');
                $vehicle_payload = $this->input->post('vehicle_payload');
                $vehicle_status = $this->input->post('vehicle_status');
                $vehicle_history = $this->input->post('vehicle_history');

                $log = array(
                    'log_id' => "",
                    'id_user' => $this->session->userdata('id_user'),
                    'log_desc' => "User update data asset kendaraan",
                    'log_time' => date("Y-m-d H:i:s")
                );

            $this->db->query("UPDATE vehicle SET vehicle_type = '$vehicle_type', vehicle_brand = '$vehicle_brand', 
                                vehicle_qty = '$vehicle_qty', vehicle_year = '$vehicle_year', type = '$type', 
                                vehicle_payload = '$vehicle_payload', vehicle_status = '$vehicle_status', vehicle_history = '$vehicle_history'
                                WHERE vehicle_id = '$vehicle_id'");
            $this->user_model->log($log,'log');
            redirect(base_url("index.php/user/main/kendaraan"));
		}else{
			redirect(base_url("index.php/user/main/kendaraan"));
		}
    }

    function hapus_kendaraan($vehicle_id){
        $where = array('vehicle_id' => $vehicle_id);
        $log = array(
            'log_id' => "",
            'id_user' => $this->session->userdata('id_user'),
            'log_desc' => "User hapus data asset kendaraan",
            'log_time' => date("Y-m-d H:i:s")
        );
        $this->user_model->log($log,'log');
		$this->user_model->hapus_kendaraan($where,'vehicle');
		redirect(base_url("index.php/user/main/kendaraan"));
    }
    
    public function general()
	{
        $data['general'] = $this->db->query("SELECT * FROM general JOIN vendor ON general.vendor_id = vendor.vendor_id");
		$data['view'] = 'user/general';
		$this->load->view('user/layout', $data);
    }

    public function add_general()
    {
        $this->form_validation->set_rules('general_type','Jenis Asset','required');
		$this->form_validation->set_rules('general_qty','Quantity Asset','required');
		$this->form_validation->set_rules('general_status','Status Kepemilikan','required');
 
		if($this->form_validation->run() != false){
            $id_user = $this->session->userdata('id_user');        
            $query = $this->db->query("SELECT vendor_id from vendor WHERE id_user = '$id_user'")->row_array();

			$data = array(
                'vendor_id' => $query['vendor_id'],
                'general_type' => $this->input->post('general_type'),
                'general_qty' => $this->input->post('general_qty'),
                'general_status' => $this->input->post('general_status')
                );

                $log = array(
                    'log_id' => "",
                    'id_user' => $this->session->userdata('id_user'),
                    'log_desc' => "User menambahkan data asset general",
                    'log_time' => date("Y-m-d H:i:s")
                );

            $this->user_model->add_admin($data,'general');
            $this->user_model->log($log,'log');
            redirect(base_url("index.php/user/main/general"));
		}else{
			redirect(base_url("index.php/user/main/general"));
		}
    }

    public function edit_general()
    {
        $this->form_validation->set_rules('general_id','general ID','required');
        $this->form_validation->set_rules('vendor_id','Vendor ID','required');
        $this->form_validation->set_rules('general_type','Jenis Asset','required');
		$this->form_validation->set_rules('general_qty','Quantity Asset','required');
		$this->form_validation->set_rules('general_status','Status Kepemilikan','required');
 
		if($this->form_validation->run() != false){
                $general_id = $this->input->post('general_id');
                $vendor_id = $this->input->post('vendor_id');
                $general_type = $this->input->post('general_type');
                $general_qty = $this->input->post('general_qty');
                $general_status = $this->input->post('general_status');

                $log = array(
                    'log_id' => "",
                    'id_user' => $this->session->userdata('id_user'),
                    'log_desc' => "User update data asset general",
                    'log_time' => date("Y-m-d H:i:s")
                );

            $this->db->query("UPDATE general SET general_type = '$general_type', general_qty = '$general_qty', 
                                general_status = '$general_status' WHERE general_id = '$general_id'");
            $this->user_model->log($log,'log');
            redirect(base_url("index.php/user/main/general"));
		}else{
			redirect(base_url("index.php/user/main/general"));
		}
    }

    function hapus_general($general_id){
        $where = array('general_id' => $general_id);
        $log = array(
            'log_id' => "",
            'id_user' => $this->session->userdata('id_user'),
            'log_desc' => "User hapus data asset general",
            'log_time' => date("Y-m-d H:i:s")
        );
        $this->user_model->log($log,'log');
		$this->user_model->hapus_kendaraan($where,'general');
		redirect(base_url("index.php/user/main/general"));
    }
    
    public function awards()
	{
        $data['awards'] = $this->db->query("SELECT * FROM awards JOIN vendor ON awards.vendor_id = vendor.vendor_id");
		$data['view'] = 'user/awards';
		$this->load->view('user/layout', $data);
    }

    public function add_awards()
    {
        $id_user = $this->session->userdata('id_user');        
        $query = $this->db->query("SELECT vendor_id from vendor WHERE id_user = '$id_user'")->row_array();

        $config['upload_path']          = './assets/awards';
		$config['allowed_types']        = 'pdf|doc|docx';
        $config['max_size']             = 10000;
        

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

		if (!$this->upload->do_upload('awards_file')) {
            $error = array('error' => $this->upload->display_errors());
            
            $output = array(
                'status' => true,
                'message' => $this->upload->display_errors()
            );
		} else {
            $data = array('upload_data' => $this->upload->data());
			$up = array(
                'vendor_id' => $query['vendor_id'],
                'awards_type' => $this->input->post('awards_type'),
                'awards_year' => $this->input->post('awards_year'),
                'awards_num' => $this->input->post('awards_num'),
                'awards_file' => $this->upload->data("file_name")
            );
            $log = array(
                'log_id' => "",
                'id_user' => $this->session->userdata('id_user'),
                'log_desc' => "User menambahkan sertifikasi/penghargaan",
                'log_time' => date("Y-m-d H:i:s")
            );
            $this->user_model->log($log,'log');
            $this->user_model->add_dokumen($up, 'awards');
        
            if($data == TRUE) {
                $output = array(
                    'status' => true,
                    'message' => 'Sukses Menambah sertifikasi/penghargaan'
                );
            }else{
                $output = array(
                    'status' => false,
                    'message' => 'Gagal Menambah sertifikasi/penghargaan'
                );
            } 
        }
        echo json_encode($output);
    }

    public function edit_awards()
    {
        $id_user = $this->session->userdata('id_user');        
        $query = $this->db->query("SELECT vendor_id from vendor WHERE id_user = '$id_user'")->row_array();

        $config['upload_path']          = './assets/awards';
		$config['allowed_types']        = 'pdf|doc|docx';
        $config['max_size']             = 10000;
        

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

		if (!$this->upload->do_upload('awards_file')) {
            $error = array('error' => $this->upload->display_errors());
            
            $output = array(
                'status' => true,
                'message' => $this->upload->display_errors()
            );
		} else {
            $data = array('upload_data' => $this->upload->data());
			
            $awards_id = $this->input->post('awards_id');
            $vendor_id = $query['vendor_id'];
            $awards_type = $this->input->post('awards_type');
            $awards_year = $this->input->post('awards_year');
            $awards_num = $this->input->post('awards_num');
            $awards_num = $this->upload->data("file_name");

            $log = array(
                'log_id' => "",
                'id_user' => $this->session->userdata('id_user'),
                'log_desc' => "User edit sertifikasi/penghargaan",
                'log_time' => date("Y-m-d H:i:s")
            );
            $this->user_model->log($log,'log');
            $this->db->query("UPDATE awards SET awards_type = '$awards_type', awards_year = '$awards_year', 
                                awards_num = '$awards_num', awards_file = '$awards_file' WHERE awards_id = '$awards_id'");
        
            if($data == TRUE) {
                $output = array(
                    'status' => true,
                    'message' => 'Sukses Edit sertifikasi/penghargaan'
                );
            }else{
                $output = array(
                    'status' => false,
                    'message' => 'Gagal Edit sertifikasi/penghargaan'
                );
            } 
        }
        echo json_encode($output);
    }

    function hapus_awards($awards_id){
        $file = $this->db->query("SELECT awards_file FROM awards WHERE awards_id = '$awards_id'")->row_array();
		$f = $file['awards_file'];
        unlink("./assets/awards/$f");
        
        $where = array('awards_id' => $awards_id);
        $log = array(
            'log_id' => "",
            'id_user' => $this->session->userdata('id_user'),
            'log_desc' => "User hapus data sertifikasi/penghargaan",
            'log_time' => date("Y-m-d H:i:s")
        );
        $this->user_model->log($log,'log');
		$this->user_model->hapus_kendaraan($where,'awards');
		redirect(base_url("index.php/user/main/awards"));
    }
}
