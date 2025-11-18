<?php
$servername = "localhost";
$username = "root"; // Username default XAMPP
$password = "";     // Password default XAMPP
$dbname = "db_finanalyze"; // Nama database yang Anda buat di Langkah 1

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
 die("Koneksi gagal: " . $conn->connect_error);
}
?>