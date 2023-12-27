<?php

$host = "localhost";
$database = "id21673886_nin";
$username = "id21673886_nicofloriano";
$password_db = "Nicofloriano@75";

$koneksi = new mysqli($host, $username, $password_db, $database);

if ($koneksi->connect_error) {
    die("Koneksi Gagal: " . $koneksi->connect_error);
}

if (!empty($_GET['username']) && !empty($_GET['password'])) {
   $username = $_GET['username'];
   $password = $_GET['password'];

   $cek = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
   $mysql = mysqli_query($koneksi,$cek);
   $result = mysqli_num_rows($mysql);

   if ($result == 0) {
       echo "0";
   } else {
       echo "Selamat Datang";
   }
} else {
   echo "Ada Data Yang Kosong";
}
   
?>
