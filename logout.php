<?php
session_start();

// Hapus semua data sesi
session_unset();

// Hancurkan sesi
session_destroy();

// Kembalikan ke halaman login
header("Location: login.html");
exit;
?>