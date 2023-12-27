<?php

// Informasi koneksi database
$host = "localhost";
$database = "id21673886_nin";
$username = "id21673886_nicofloriano";
$password = "Nicofloriano@75"; // Ganti dengan kata sandi database Anda

// Membuat koneksi ke database
$koneksi = new mysqli($host, $username, $password, $database);

// Memeriksa apakah koneksi berhasil
if ($koneksi->connect_error) {
    die("Koneksi Gagal: " . $koneksi->connect_error);
}

// Set header untuk memastikan response berupa JSON
header('Content-Type: application/json');

// // Mendapatkan data dari database (contoh query)
// $query = "SELECT * FROM tabel_anda";
// $result = $koneksi->query($query);

// // Mengonversi hasil query ke dalam bentuk array
// $data = array();
// while ($row = $result->fetch_assoc()) {
//     $data[] = $row;
// }

// Menutup koneksi database
$koneksi->close();

// Mengirimkan data sebagai response JSON
echo json_encode($data);

?>
