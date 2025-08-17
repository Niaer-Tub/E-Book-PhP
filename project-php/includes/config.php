<?php
// Konfigurasi dasar (contoh koneksi database)
$host = "localhost";
$user = "root";
$pass = "";
$db   = "project_db";

// Coba koneksi
$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Jika berhasil, kamu bisa gunakan $conn di file lain
?>
