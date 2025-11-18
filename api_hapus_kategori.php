<?php
include 'koneksi.php';
header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'));

$nama = $data->nama;
$jenis = $data->jenis;

if (!empty($nama) && !empty($jenis)) {
    $stmt = $conn->prepare("DELETE FROM kategori WHERE nama = ? AND jenis = ?");
    $stmt->bind_param("ss", $nama, $jenis);

    if ($stmt->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'Kategori berhasil dihapus']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error: ' . $stmt->error]);
    }
    $stmt->close();
} else {
    echo json_encode(['status' => 'error', 'message' => 'Nama atau jenis tidak ditemukan']);
}

$conn->close();
?>