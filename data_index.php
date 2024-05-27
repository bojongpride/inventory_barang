<?php
include 'koneksi.php';

$sql = "SELECT * FROM data_barang";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id_barang'] . "</td>";
        echo "<td>" . $row['kode_barang'] . "</td>";
        echo "<td>" . $row['nama_barang'] . "</td>";
        echo "<td>" . $row['jumlah_barang'] . "</td>";
        echo "<td>" . $row['satuan_barang'] . "</td>";
        echo "<td>" . $row['harga_beli'] . "</td>";
        echo "<td>" . ($row['jumlah_barang'] != 0 ? 'Tersedia' : 'Kosong') . "</td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
