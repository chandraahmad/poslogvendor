<?php

  require_once 'koneksi.php';

  header('Content-Type: application/json');

  if($_SERVER['REQUEST_METHOD']=='POST') {

        $aa = "SELECT MAX(RIGHT(id_user,4)) AS kd_max FROM user";
        $q = mysqli_query($aa);
        $qa = mysqli_num_rows($aa);
        $qs = mysqli_fetch_array($aa);
        $kode = $qs['kd_max'];

        if ($qa > 0) {
          foreach ($qa as $k) {
            $tmp = (int) substr($kode, 4, 4);
            $tmp++;
            $kd = sprintf("%04s", $tmp);
          }
        } else {
          $kd = "0001";
        }
        $as = date('dmY') . $kd;

    $id_user = "USER".$as;
    $level_id = 2;
    $fullname = $_POST['fullname'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = md5($_POST['fullname']);
    $last_login = "";
    $create_time = date("Y-m-d");
    $update_time = "";
    $job_title ="";


    $query = "INSERT INTO user (id_user, level_id, fullname, gender, email, password, last_login, create_time, update_time, job_title) VALUES ()";
    $exeq = mysqli_query($conn, $query);

    echo ($exeq) ? json_encode(array('kode' => 1, 'pesan' => 'Kuesioner berhasil dikirim')):
                  json_encode(array('kode' => 2, 'pesan' => 'Kuesioner gagal dikirim'));
  } else {
      echo json_encode(array('kode' => 101, 'pesan' => 'request tidak valid'));
  }
?>