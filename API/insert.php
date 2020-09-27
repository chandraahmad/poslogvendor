<?php

  require_once 'koneksi.php';

  header('Content-Type: application/json');

  if($_SERVER['REQUEST_METHOD']=='POST') {
    $npm = isset($_POST['npm'])?$_POST['npm']:"";
    $dosen = isset($_POST['nik'])?$_POST['nik']:"";
    $matkul = isset($_POST['kd_matkul'])?$_POST['kd_matkul']:"";
    $kd_pertanyaan = isset($_POST['kd_pertanyaan'])?$_POST['kd_pertanyaan']:"";
    $kd_kuesioner = isset($_POST['kd_kuesioner'])?$_POST['kd_kuesioner']:"";
    $variabel = isset($_POST['variabel'])?$_POST['variabel']:"";
    $created_by = isset($_POST['created_by'])?$_POST['created_by']:"";

    $sqlVal = []; // array
    
    // melakukan perulangan berdasarkan index
    $len = count($kd_pertanyaan);
    // if($len == 0) $len = count($kd_kuesioner);
    // if($len == 0) $len = count($variabel);

    for($i = 0;$i < $len;$i++) {
      $sqlVal[] = "('$npm','$dosen', '$matkul', '$kd_pertanyaan[$i]', '$kd_kuesioner[$i]', '$variabel[$i]', '$created_by')";
    }

    $query = "INSERT INTO hasil_kuesioner (npm, nik, kd_matkul, kd_pertanyaan, kd_kuesioner, variabel, created_by) 
              VALUES " . implode(', ', $sqlVal);
    $exeq = mysqli_query($conn, $query);

    echo ($exeq) ? json_encode(array('kode' => 1, 'pesan' => 'Kuesioner berhasil dikirim')):
                  json_encode(array('kode' => 2, 'pesan' => 'Kuesioner gagal dikirim'));
  } else {
      echo json_encode(array('kode' => 101, 'pesan' => 'request tidak valid'));
  }
?>