<?php
// Masukkan password yang Anda inginkan di sini
$password_polos = 'password123';

// PHP akan membuat hash yang aman
$hash = password_hash($password_polos, PASSWORD_DEFAULT);

// Tampilkan hasilnya di layar
echo "Password Anda: " . $password_polos;
echo "<br><br>";
echo "==============================================================<br>";
echo "Salin (Copy) seluruh hash di bawah ini dan tempel (paste) ke phpMyAdmin:";
echo "<br><br>";
// Gunakan textarea agar mudah di-copy
echo "<textarea rows='3' cols='70' readonly>" . $hash . "</textarea>";
echo "<br>==============================================================";
?>