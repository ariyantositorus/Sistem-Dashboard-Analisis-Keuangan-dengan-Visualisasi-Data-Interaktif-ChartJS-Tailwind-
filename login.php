<?php
session_start();
include 'koneksi.php';
header('Content-Type: application/json');

// Ambil data (username, password) dari JavaScript
$data = json_decode(file_get_contents('php://input'));

$username = $data->username;
$password = $data->password;

// Cari pengguna di database
$stmt = $conn->prepare("SELECT password, nama_lengkap FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    // Verifikasi password yang di-hash
    if (password_verify($password, $row['password'])) {
        // Password benar! Buat "kartu tamu" (Sesi)
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['nama_lengkap'] = $row['nama_lengkap'];
        
        echo json_encode(['status' => 'success', 'message' => 'Login berhasil']);
    } else {
        // Password salah
        echo json_encode(['status' => 'error', 'message' => 'Username atau password salah']);
    }
} else {
    // Username tidak ditemukan
    echo json_encode(['status' => 'error', 'message' => 'Username atau password salah']);
}

$stmt->close();
$conn->close();
?>