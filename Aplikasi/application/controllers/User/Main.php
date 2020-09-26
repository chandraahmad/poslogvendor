<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

    function __construct(){
		parent::__construct();		
		$this->load->model('user_model');

        if ($this->session->userdata('level') == 2) {
			
		} else {
			redirect(base_url("index.php/main/logout"));
		}
	}
	public function index()
	{
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
    
    public function add_admin()
    {
        $this->form_validation->set_rules('vendor_name','Nama Perusahaan','trim | required');
		$this->form_validation->set_rules('founding_date','Tahun Didirikan','trim | required');
		$this->form_validation->set_rules('address','Alamat Perusahaan','trim | required');
		$this->form_validation->set_rules('postcode','Kode Pos','trim | required');
		$this->form_validation->set_rules('vendor_email','E-mail','trim | required');
		$this->form_validation->set_rules('vendor_phone','Telepon','trim | required');
		$this->form_validation->set_rules('vendor_fax','Fax','trim | required');
		$this->form_validation->set_rules('business_field_id','Bidang Usaha','trim | required');
		$this->form_validation->set_rules('category_id','Kategori','trim | required');
		$this->form_validation->set_rules('vendor_desc','Deskripsi Perusahaan','trim | required');
 
		if($this->form_validation->run() != false){
            date_default_timezone_set('Asia/Jakarta');
            $kode = $this->user_model->get_kode();
			$data = array(
                'vendor_id' => "VENDOR".$kode,
                'id_user' => 1,
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
}
