<?php
// Mulai sesi
session_start();

// Cek apakah pengguna sudah login atau belum
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Jika belum login, "usir" mereka kembali ke halaman login
    header("Location: login.html");
    exit;
}
?>