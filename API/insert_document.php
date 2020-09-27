<?php

  require_once 'koneksi.php';

  header('Content-Type: application/json');

  if($_SERVER['REQUEST_METHOD']=='POST') {

    $doc_id = " ";
    $vendor_id = 2;
    $doc_type = $_POST['doc_type'];
    $doc_file = $_POST['doc_file'];
    $doc_status = 1;
    
    $query = "INSERT INTO document (doc_id, vendor_id, doc_type, doc_file, doc_status ) VALUES ()";
    $exeq = mysqli_query($conn, $query);

    echo ($exeq) ? json_encode(array('kode' => 1, 'pesan' => 'Kuesioner berhasil dikirim')):
                  json_encode(array('kode' => 2, 'pesan' => 'Kuesioner gagal dikirim'));
  } else {
      echo json_encode(array('kode' => 101, 'pesan' => 'request tidak valid'));
  }
?>