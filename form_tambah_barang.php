<html>
    <head>
        <title>
            Inventory Barang
        </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h2>Form tambah Barang</h2>
        <div class="navbar">
        <nav>
        <ul>
            <li><a href="index.php">Inventory Barang</a></li>
            <li><a href="form_tambah_barang.php">tambah barang</a></li>
            <li><a href="form_pakai_barang.php">pemakaian barang</a></li>
            <li><a href="form_hapus_barang.php">hapus barang</a></li>
            <li><a href="form_update_barang.php">update barang</a></li>
        </ul>
        </nav>
        <form class="mt30" action="submit_tambah_barang.php" method="post">
        <label for="id_barang">ID Barang:</label>
        <input type="text" id="id_barang" name="id_barang" required>

        <label for="kode_barang">Kode Barang:</label>
        <input type="text" id="kode_barang" name="kode_barang" required>

        <label for="nama_barang">Nama Barang:</label>
        <input type="text" id="nama_barang" name="nama_barang" required>

        <label for="jumlah_barang">Jumlah Barang:</label>
        <input type="number" id="jumlah_barang" name="jumlah_barang" required>

        <label for="satuan_barang">Satuan Barang:</label>
        <select id="satuan_barang" name="satuan_barang" required>
            <option value="meter">Meter</option>
            <option value="liter">Liter</option>
            <option value="kg">Kg</option>
            <option value="pcs">Pcs</option>
        </select>

        <label for="harga_beli">Harga Beli:</label>
        <input type="number" id="harga_beli" name="harga_beli" required>

        <input type="submit" value="Submit">
        </form>

    </body>
</html>