<?php
// mengkoneksikan ke database
$server = "localhost";
$server_username = "root";
$server_password = "";
$database_name = "vendor";
$conn = new Mysqli($server, $server_username, $server_password, $database_name);

// $koneksi = mysqli_connect('localhost','root','','vendor');
?>