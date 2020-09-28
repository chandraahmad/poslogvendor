<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    function __construct(){
		parent::__construct();		
		$this->load->model('user_model');
		$this->load->library('encrypt');

        if ($this->session->userdata('level') == 1) {
			
		} else {
			redirect(base_url("index.php/main/logout"));
		}
	}
	public function index()
	{
		$data['dokumen'] = $this->db->query("SELECT COUNT(*) AS jumlah from document")->row_array();
        $data['kendaraan'] = $this->db->query("SELECT COUNT(*) AS jumlah from vehicle")->row_array();
        $data['general'] = $this->db->query("SELECT COUNT(*) AS jumlah from general")->row_array();
		$data['awards'] = $this->db->query("SELECT COUNT(*) AS jumlah from awards")->row_array();
		$data['log'] = $this->db->query("SELECT * FROM log JOIN user ON log.id_user = user.id_user");
		$data['view'] = 'admin/dashboard';
		$this->load->view('admin/layout', $data);
	}

	public function vendor()
	{
		$data['vendor'] = $this->db->query("SELECT * FROM vendor JOIN business_field ON vendor.business_field_id = business_field.business_field_id
											WHERE vendor_status = 1");
		$data['view'] = 'admin/vendor';
		$this->load->view('admin/layout', $data);
	}

	public function drp()
	{
		$data['vendor'] = $this->db->query("SELECT * FROM vendor JOIN business_field ON vendor.business_field_id = business_field.business_field_id
											WHERE vendor_status = 2");
		$data['view'] = 'admin/drp';
		$this->load->view('admin/layout', $data);
	}

	public function setuju_vendor()
    {
        $this->form_validation->set_rules('vendor_id','Vendor ID','required');
        $this->form_validation->set_rules('vendor_name','Nama Perusahaan','required');
        $this->form_validation->set_rules('vendor_email','Email Perusahaan','required');
 
		if($this->form_validation->run() != false){
                $vendor_id = $this->input->post('vendor_id');
                $vendor_name = $this->input->post('vendor_name');
                $vendor_email = $this->input->post('vendor_email');
                
                $log = array(
                    'log_id' => "",
                    'id_user' => $this->session->userdata('id_user'),
                    'log_desc' => "BOD menyutujui $vendor_name",
                    'log_time' => date("Y-m-d H:i:s")
                );

            $this->db->query("UPDATE vendor SET vendor_status = 2 WHERE vendor_id = '$vendor_id'");
			$this->user_model->log($log,'log');

			$config = [
				'protocol' => 'smtp',
				'smtp_host' => 'ssl://smtp.googlemail.com',
				'smtp_port' => 465,
				'smtp_user' => 'stormxzero1@gmail.com',
				'smtp_pass'   => 'minuman123',
				'mailtype'  => 'html', 
				'charset'   => 'iso-8859-1'
			];
	
			$this->email->initialize($config);
			$this->load->library('email', $config);
			$this->email->set_newline("\r\n");
			$this->email->from('no-reply@poslogistics.co.id', 'no-reply@poslogistics.co.id');
			$this->email->to($vendor_email);
			// $this->email->attach('#');
			$this->email->subject('Selamat perusahaan anda telah menjadi rekanan PT. Pos Logistik Indonesia');
			$this->email->message("Selamat perusahaan anda telah menjadi rekanan PT. Pos Logistik Indonesia");
	
			if ($this->email->send()) {
				redirect(base_url("index.php/admin/main/vendor"));
			} else {
				show_error($this->email->print_debugger());
			}

		}else{
			redirect(base_url("index.php/admin/main/vendor"));
		}
	}
	
	public function hapus_vendor()
    {
        $this->form_validation->set_rules('vendor_id','Vendor ID','required');
        $this->form_validation->set_rules('vendor_name','Nama Perusahaan','required');
 
		if($this->form_validation->run() != false){
                $vendor_id = $this->input->post('vendor_id');
                $vendor_name = $this->input->post('vendor_name');
                
                $log = array(
                    'log_id' => "",
                    'id_user' => $this->session->userdata('id_user'),
                    'log_desc' => "BOD menghapus $vendor_name",
                    'log_time' => date("Y-m-d H:i:s")
                );

            $this->db->query("DELETE FROM vendor WHERE vendor_id = '$vendor_id'");
            $this->user_model->log($log,'log');
            redirect(base_url("index.php/admin/main/vendor"));
		}else{
			redirect(base_url("index.php/admin/main/vendor"));
		}
	}

	public function hapus_drp()
    {
        $this->form_validation->set_rules('vendor_id','Vendor ID','required');
        $this->form_validation->set_rules('vendor_name','Nama Perusahaan','required');
 
		if($this->form_validation->run() != false){
                $vendor_id = $this->input->post('vendor_id');
                $vendor_name = $this->input->post('vendor_name');
                
                $log = array(
                    'log_id' => "",
                    'id_user' => $this->session->userdata('id_user'),
                    'log_desc' => "BOD menghapus $vendor_name",
                    'log_time' => date("Y-m-d H:i:s")
                );

            $this->db->query("DELETE FROM vendor WHERE vendor_id = '$vendor_id'");
            $this->user_model->log($log,'log');
            redirect(base_url("index.php/admin/main/vendor"));
		}else{
			redirect(base_url("index.php/admin/main/vendor"));
		}
	}
	
	public function search_document()
	{
		$data['vendor'] = $this->db->query("SELECT * FROM vendor")->result();
		$data['view'] = 'admin/document_search';
		$this->load->view('admin/layout', $data);
	}

	public function cari_dokumen()
	{
		$vendor_id = $this->input->post('vendor_id');
		$data['dokumen'] = $this->db->query("SELECT * FROM document JOIN vendor ON document.vendor_id = vendor.vendor_id WHERE vendor_id = '$vendor_id'");		
		$data['view'] = 'admin/document';
		$this->load->view('admin/layout', $data);
	}

	public function hapus_dokumen()
    {
        $this->form_validation->set_rules('doc_id','Document ID','required');
        $this->form_validation->set_rules('doc_type','Jenis Dokumen','required');
        $this->form_validation->set_rules('vendor_name','Nama Perusahaan','required');
 
		if($this->form_validation->run() != false){
                $doc_id = $this->input->post('doc_id');
                $doc_type = $this->input->post('doc_type');
                $vendor_name = $this->input->post('vendor_name');
                
                $log = array(
                    'log_id' => "",
                    'id_user' => $this->session->userdata('id_user'),
                    'log_desc' => "BOD menghapus dokumen $doc_type $vendor_name",
                    'log_time' => date("Y-m-d H:i:s")
                );

            $this->db->query("DELETE FROM document WHERE doc_id = '$doc_id'");
            $this->user_model->log($log,'log');
            redirect(base_url("index.php/admin/main/document_search"));
		}else{
			redirect(base_url("index.php/admin/main/document_search"));
		}
	}

	public function setuju_dokumen()
    {
        $this->form_validation->set_rules('doc_id','Document ID','required');
        $this->form_validation->set_rules('doc_type','Document Type','required');
        $this->form_validation->set_rules('vendor_name','Nama Perusahaan','required');
        $this->form_validation->set_rules('vendor_email','Email Perusahaan','required');
 
		if($this->form_validation->run() != false){
                $doc_id = $this->input->post('doc_id');
                $doc_type = $this->input->post('doc_type');
                $vendor_name = $this->input->post('vendor_name');
                $vendor_email = $this->input->post('vendor_email');
                
                $log = array(
                    'log_id' => "",
                    'id_user' => $this->session->userdata('id_user'),
                    'log_desc' => "BOD menyutujui dokumen $doc_type $vendor_name",
                    'log_time' => date("Y-m-d H:i:s")
                );

            $this->db->query("UPDATE document SET doc_status = 2 WHERE doc_id = '$doc_id'");
			$this->user_model->log($log,'log');

			$config = [
				'protocol' => 'smtp',
				'smtp_host' => 'ssl://smtp.googlemail.com',
				'smtp_port' => 465,
				'smtp_user' => 'stormxzero1@gmail.com',
				'smtp_pass'   => 'minuman123',
				'mailtype'  => 'html', 
				'charset'   => 'iso-8859-1'
			];
	
			$this->email->initialize($config);
			$this->load->library('email', $config);
			$this->email->set_newline("\r\n");
			$this->email->from('no-reply@poslogistics.co.id', 'no-reply@poslogistics.co.id');
			$this->email->to($vendor_email);
			// $this->email->attach('#');
			$this->email->subject("Selamat Dokumen $doc_type PT. Pos Logistik Indonesia");
			$this->email->message("Selamat Dokumen $doc_type PT. Pos Logistik Indonesia");
	
			if ($this->email->send()) {
				redirect(base_url("index.php/admin/main/search_document"));
			} else {
				show_error($this->email->print_debugger());
			}

		}else{
			redirect(base_url("index.php/admin/main/search_document"));
		}
	}

	public function search_kendaraan()
	{
		$data['vendor'] = $this->db->query("SELECT * FROM vendor")->result();
		$data['view'] = 'admin/kendaraan_search';
		$this->load->view('admin/layout', $data);
	}

	public function cari_kendaraan()
	{
		$vendor_id = $this->input->post('vendor_id');
		$data['kendaraan'] = $this->db->query("SELECT * FROM vehicle JOIN vendor ON vehicle.vendor_id = vendor.vendor_id WHERE vendor_id = '$vendor_id'");		
		$data['view'] = 'admin/kendaraan';
		$this->load->view('admin/layout', $data);
	}

	public function hapus_kendaraan()
    {
        $this->form_validation->set_rules('vehicle_id','Vehicle ID','required');
        $this->form_validation->set_rules('vehicle_type','Jenis Kendaraan','required');
        $this->form_validation->set_rules('vendor_name','Nama Perusahaan','required');
 
		if($this->form_validation->run() != false){
                $doc_id = $this->input->post('doc_id');
                $doc_type = $this->input->post('doc_type');
                $vendor_name = $this->input->post('vendor_name');
                
                $log = array(
                    'log_id' => "",
                    'id_user' => $this->session->userdata('id_user'),
                    'log_desc' => "BOD menghapus kendaraan $vehicle_type $vendor_name",
                    'log_time' => date("Y-m-d H:i:s")
                );

            $this->db->query("DELETE FROM vehicle WHERE doc_id = '$doc_id'");
            $this->user_model->log($log,'log');
            redirect(base_url("index.php/admin/main/kendaraan_search"));
		}else{
			redirect(base_url("index.php/admin/main/kendaraan_search"));
		}
	}

	public function search_general()
	{
		$data['vendor'] = $this->db->query("SELECT * FROM vendor")->result();
		$data['view'] = 'admin/general_search';
		$this->load->view('admin/layout', $data);
	}

	public function cari_general()
	{
		$vendor_id = $this->input->post('vendor_id');
		$data['general'] = $this->db->query("SELECT * FROM general JOIN vendor ON general.vendor_id = vendor.vendor_id WHERE vendor_id = '$vendor_id'");		
		$data['view'] = 'admin/general';
		$this->load->view('admin/layout', $data);
	}

	public function hapus_general()
    {
        $this->form_validation->set_rules('general_id','General ID','required');
        $this->form_validation->set_rules('general_type','Jenis General','required');
        $this->form_validation->set_rules('vendor_name','Nama Perusahaan','required');
 
		if($this->form_validation->run() != false){
                $general_id = $this->input->post('general_id');
                $general_type = $this->input->post('general_type');
                $vendor_name = $this->input->post('vendor_name');
                
                $log = array(
                    'log_id' => "",
                    'id_user' => $this->session->userdata('id_user'),
                    'log_desc' => "BOD menghapus asset $general_type $vendor_name",
                    'log_time' => date("Y-m-d H:i:s")
                );

            $this->db->query("DELETE FROM general WHERE general_id = '$general_id'");
            $this->user_model->log($log,'log');
            redirect(base_url("index.php/admin/main/general_search"));
		}else{
			redirect(base_url("index.php/admin/main/general_search"));
		}
	}

	public function search_awards()
	{
		$data['vendor'] = $this->db->query("SELECT * FROM vendor")->result();
		$data['view'] = 'admin/awards_search';
		$this->load->view('admin/layout', $data);
	}

	public function cari_awards()
	{
		$vendor_id = $this->input->post('vendor_id');
		$data['awards'] = $this->db->query("SELECT * FROM awards JOIN vendor ON awards.vendor_id = vendor.vendor_id WHERE vendor_id = '$vendor_id'");		
		$data['view'] = 'admin/awards';
		$this->load->view('admin/layout', $data);
	}

	public function hapus_awards()
    {
        $this->form_validation->set_rules('awards_id','Awards ID','required');
        $this->form_validation->set_rules('awards_type','Jenis Awards','required');
        $this->form_validation->set_rules('vendor_name','Nama Perusahaan','required');
 
		if($this->form_validation->run() != false){
                $awards_id = $this->input->post('awards_id');
                $awards_type = $this->input->post('awards_type');
                $vendor_name = $this->input->post('vendor_name');
                
                $log = array(
                    'log_id' => "",
                    'id_user' => $this->session->userdata('id_user'),
                    'log_desc' => "BOD menghapus sertifikat/penghargaan $awards_type $vendor_name",
                    'log_time' => date("Y-m-d H:i:s")
                );

            $this->db->query("DELETE FROM awards WHERE awards_id = '$awards_id'");
            $this->user_model->log($log,'log');
            redirect(base_url("index.php/admin/main/awards_search"));
		}else{
			redirect(base_url("index.php/admin/main/awards_search"));
		}
	}

	public function invite_vendor()
	{
		$data['vendor'] = $this->db->query("SELECT * FROM vendor")->result();
		$data['view'] = 'admin/invite';
		$this->load->view('admin/layout', $data);
	}

	public function undang_vendor()
	{
		$vendor_id = $this->input->post('vendor_id');
		$vendor = $this->db->query("SELECT * FROM vendor WHERE vendor_id = '$vendor_id'")->row_array();
		$vendor_email = $vendor['vendor_email'];
		$vendor_name = $vendor['vendor_name'];
		$config = [
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'stormxzero1@gmail.com',
			'smtp_pass'   => 'minuman123',
			'mailtype'  => 'html', 
			'charset'   => 'iso-8859-1'
		];

		$this->email->initialize($config);
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		$this->email->from('no-reply@poslogistics.co.id', 'no-reply@poslogistics.co.id');
		$this->email->to($vendor_email);
		// $this->email->attach('#');
		$this->email->subject('Undangan: Persentasi Perusahaan');
		$this->email->message("$vendor_name anda diundang persentasi perusahaan");

		if ($this->email->send()) {
			redirect(base_url("index.php/admin/main/"));
		} else {
			show_error($this->email->print_debugger());
		}		
	}
}
