<?php
include 'koneksi.php';
header('Content-Type: application/json');

// Ambil data JSON yang dikirim oleh JavaScript
$data = json_decode(file_get_contents('php://input'));

// Ambil data individual
$tanggal = $data->tanggal;
$deskripsi = $data->deskripsi;
$jumlah = $data->jumlah;
$kategori = $data->kategori;
$sub_kategori = $data->sub_kategori;

// Gunakan "Prepared Statements" untuk keamanan
$stmt = $conn->prepare("INSERT INTO transaksi (tanggal, deskripsi, jumlah, kategori, sub_kategori) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("ssiss", $tanggal, $deskripsi, $jumlah, $kategori, $sub_kategori);

if ($stmt->execute()) {
    echo json_encode(['status' => 'success', 'message' => 'Data berhasil disimpan']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Error: ' . $stmt->error]);
}

$stmt->close();
$conn->close();
?>