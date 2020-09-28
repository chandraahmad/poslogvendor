<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class PoslogApiVendorModel extends CI_Model {

	public function __construct()
    {
        parent::__construct();
    }
    
    public function get_byid_user($email, $password) {
        $query = $this->db->select('*')->from('user')->where('email', $email)->where('password', $password)
                ->get();
		return $query->row();
    }

    public function get_byid_vendor($id_user) {
        $query = $this->db->select('*')->from('vendor')->where('id_user', $id_user)
                ->get();
		return $query->row();
    }

    public function get_all_business_field() {
        $query = $this->db->select('*')->from('business_field')
                ->get();
		return $query->result();
    }

    public function get_byid_all_category($data) {
        $query = $this->db->select('*')->from('category')->where('business_field_id', $data)
                ->get();
		return $query->result();
    }

    public function get_all_gender() {
        $query = $this->db->query("SHOW COLUMNS FROM user WHERE Field = 'gender'")->row( 0 )->Type;
        preg_match("/^enum\(\'(.*)\'\)$/", $query, $matches);
        $enum = explode("','", $matches[1]);
        return $enum;
    }

    public function register($data) {
        $query = $this->db->insert('user', $data);
		return $query;
    }

    public function insert_administration($data) {
        $query = $this->db->insert('vendor', $data);
		return $query;
    }

    public function update_administration($data) {
		$this->db->where('id_user',$data['id_user']);
        unset($data['id_user']);
        unset($data['vendor_id']);
        unset($data['founding_date']);
        unset($data['vendor_status']);
        return $this->db->update('vendor',$data);
	}

    public function update_profile($data) {
		$this->db->where('id_user',$data['id_user']);
        unset($data['id_user']);
        return $this->db->update('user',$data);
	}

    function get_kode(){
        $q = $this->db->query("SELECT MAX(RIGHT(id_user,4)) AS kd_max FROM user WHERE DATE(create_time)=CURDATE()");
        $kd = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $k) {
                $tmp = ((int)$k->kd_max) + 1;
                $kd = sprintf("%04s", $tmp);
            }
        } else {
            $kd = "0001";
        }
        date_default_timezone_set('Asia/Jakarta');
        return date('dmY') . $kd;
    }

    function get_kode_vendor(){
        $q = $this->db->query("SELECT MAX(RIGHT(vendor_id,4)) AS kd_max FROM vendor WHERE DATE(founding_date)=CURDATE()");
        $kd = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $k) {
                $tmp = ((int)$k->kd_max) + 1;
                $kd = sprintf("%04s", $tmp);
            }
        } else {
            $kd = "0001";
        }
        date_default_timezone_set('Asia/Jakarta');
        return date('dmY') . $kd;
    }
}