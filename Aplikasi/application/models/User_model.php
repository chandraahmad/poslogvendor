<?php
class User_model extends CI_Model
{

    function get_kode()
    {
        $q = $this->db->query("SELECT MAX(RIGHT(vendor_id,4)) AS kd_max FROM vendor");
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

    public function add_admin($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function log($log, $table)
    {
        $this->db->insert($table, $log);
    }

    
}