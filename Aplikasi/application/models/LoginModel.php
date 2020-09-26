<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {

	public function __construct()
    {
        parent::__construct();
    }
    public function login($data) {
        $query = $this->db->select('*')
                ->from('user')
                ->where('email', $data['email'])
                ->where('password', $data['password'])
                ->get();
		return $query;
    }

    public function GetAllGender() {
        $query = $this->db->query("SHOW COLUMNS FROM user WHERE Field = 'gender'")->row( 0 )->Type;
        preg_match("/^enum\(\'(.*)\'\)$/", $query, $matches);
        $enum = explode("','", $matches[1]);
        return $enum;
    }

    public function register($data) {
        $query = $this->db->insert('user', $data);
		return $query;
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
}