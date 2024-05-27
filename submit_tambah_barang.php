<?php
// Mengambil data yang dikirimkan oleh form
$id_barang = $_POST['id_barang'];
$kode_barang = $_POST['kode_barang'];
$nama_barang = $_POST['nama_barang'];
$jumlah_barang = $_POST['jumlah_barang'];
$satuan_barang = $_POST['satuan_barang'];
$harga_beli = $_POST['harga_beli'];

//menentukan status barang
$status_barang = ($jumlah_barang > 0) ? 1 : 0;

// Koneksi ke database (gunakan informasi koneksi Anda)
include 'koneksi.php';

// Query untuk menyimpan data ke dalam tabel barang
$sql = "INSERT INTO data_barang (id_barang, kode_barang, nama_barang, jumlah_barang, satuan_barang, harga_beli, status_barang) 
        VALUES ('$id_barang', '$kode_barang', '$nama_barang', '$jumlah_barang', '$satuan_barang', '$harga_beli', '$status_barang')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Data berhasil disimpan.'); window.location.href = 'index.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
