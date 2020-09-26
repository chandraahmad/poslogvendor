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
		return $query->result();
    }

    public function GetAllGender() {
        $query = $this->db->query("SHOW COLUMNS FROM user WHERE Field = 'gender'")->row( 0 )->Type;
        preg_match("/^enum\(\'(.*)\'\)$/", $query, $matches);
        $enum = explode("','", $matches[1]);
        return $enum;
    }
}