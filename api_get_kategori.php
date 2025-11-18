<?php
include 'koneksi.php';
header('Content-Type: application/json');

$sql = "SELECT * FROM kategori ORDER BY jenis, nama";
$result = $conn->query($sql);

$kategori = array(
    'pendapatan' => array(),
    'pengeluaran' => array()
);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $kategori[$row['jenis']][] = $row['nama'];
    }
}

echo json_encode($kategori);

$conn->close();
?>