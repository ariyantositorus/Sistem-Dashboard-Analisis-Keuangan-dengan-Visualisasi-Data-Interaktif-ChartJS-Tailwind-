<?php
include 'koneksi.php';

// Set header agar browser tahu ini adalah data JSON
header('Content-Type: application/json');

$sql = "SELECT * FROM transaksi ORDER BY tanggal DESC";
$result = $conn->query($sql);

$transaksi = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        // Konversi tipe data agar sesuai dengan JS
        $row['jumlah'] = (int)$row['jumlah'];
        $transaksi[] = $row;
    }
}

echo json_encode($transaksi); // Kirim data sebagai teks JSON

$conn->close();
?>