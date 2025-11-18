<?php
include 'koneksi.php';
header('Content-Type: application/json');

// Ambil data JSON yang dikirim
$data = json_decode(file_get_contents('php://input'));

// Ambil semua data
$id = $data->id;
$tanggal = $data->tanggal;
$deskripsi = $data->deskripsi;
$jumlah = $data->jumlah;
$kategori = $data->kategori;
$sub_kategori = $data->sub_kategori;

if (!empty($id)) {
    $stmt = $conn->prepare("UPDATE transaksi SET tanggal = ?, deskripsi = ?, jumlah = ?, kategori = ?, sub_kategori = ? WHERE id = ?");
    $stmt->bind_param("ssissi", $tanggal, $deskripsi, $jumlah, $kategori, $sub_kategori, $id);

    if ($stmt->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'Data berhasil diperbarui']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error: ' . $stmt->error]);
    }
    $stmt->close();
} else {
    echo json_encode(['status' => 'error', 'message' => 'ID tidak ditemukan']);
}

$conn->close();
?>