<?php
include 'koneksi.php';

$id_barang = $_GET['id_barang'];

$sql = "SELECT kode_barang, nama_barang, jumlah_barang FROM data_barang WHERE id_barang = '$id_barang'";
$result = $conn->query($sql);

header('Content-Type: application/json');

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo json_encode($row);
} else {
    echo json_encode(array('error' => 'Barang tidak ditemukan'));
}

$conn->close();
?>
