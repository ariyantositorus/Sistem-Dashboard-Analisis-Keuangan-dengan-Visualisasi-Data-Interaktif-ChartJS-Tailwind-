<?php
include 'koneksi.php';
header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'));

$nama = $data->nama;
$jenis = $data->jenis;

// Validasi sederhana
if (empty($nama) || empty($jenis)) {
    echo json_encode(['status' => 'error', 'message' => 'Nama dan jenis tidak boleh kosong']);
    exit;
}

$stmt = $conn->prepare("INSERT INTO kategori (nama, jenis) VALUES (?, ?)");
$stmt->bind_param("ss", $nama, $jenis);

if ($stmt->execute()) {
    echo json_encode(['status' => 'success', 'message' => 'Kategori berhasil disimpan']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Error: ' . $stmt->error]);
}

$stmt->close();
$conn->close();
?>