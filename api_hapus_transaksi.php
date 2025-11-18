<?php
include 'koneksi.php';
header('Content-Type: application/json');

// Ambil data JSON (kita kirim ID dalam bentuk JSON)
$data = json_decode(file_get_contents('php://input'));

// Ambil ID
$id = $data->id;

if (!empty($id)) {
    $stmt = $conn->prepare("DELETE FROM transaksi WHERE id = ?");
    $stmt->bind_param("i", $id); // 'i' berarti integer

    if ($stmt->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'Data berhasil dihapus']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error: ' . $stmt->error]);
    }
    $stmt->close();
} else {
    echo json_encode(['status' => 'error', 'message' => 'ID tidak ditemukan']);
}

$conn->close();
?>