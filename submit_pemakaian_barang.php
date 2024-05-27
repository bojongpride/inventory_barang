<?php
include 'koneksi.php';

$id_barang = $_POST['id_barang'];
$jumlah_pakai = $_POST['jumlah_pakai'];

// Query to get the available quantity of the item
$sql_select = "SELECT jumlah_barang FROM data_barang WHERE id_barang = '$id_barang'";
$result_select = $conn->query($sql_select);

if ($result_select->num_rows > 0) {
    $row = $result_select->fetch_assoc();
    $jumlah_tersedia = $row['jumlah_barang'];

    // Validasi jumlah barang yang diminta
    if ($jumlah_pakai > $jumlah_tersedia) {
        echo "<script>alert('Maaf jumlah tidak tersedia.'); window.location.href = 'index.php';</script>";
    } else {
        // Kurangi jumlah barang yang tersedia
        $sisa_barang = $jumlah_tersedia - $jumlah_pakai;
        $sql_update = "UPDATE data_barang SET jumlah_barang = '$sisa_barang' WHERE id_barang = '$id_barang'";
        if ($conn->query($sql_update) === TRUE) {
            echo "<script>alert('Data berhasil disimpan.'); window.location.href = 'index.php';</script>";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
} else {
    echo "Barang tidak ditemukan.";
}

$conn->close();
?>
