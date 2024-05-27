<?php
include 'koneksi.php';

$id_barang = $_POST['id_barang'];

// Query to get the available quantity of the item
$sql_delete = "DELETE FROM data_barang WHERE id_barang = '$id_barang'";
if ($conn->query($sql_delete) === TRUE) {
    // Jika penghapusan berhasil, kembalikan pesan sukses
    echo "<script>alert('Data berhasil dihapus.'); window.location.href = 'index.php';</script>";
} else {
    // Jika terjadi kesalahan saat menghapus, kembalikan pesan error
    echo "Error: " . $conn->error;
}

$conn->close();
?>
