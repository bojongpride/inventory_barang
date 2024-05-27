<html>
    <head>
        <title>
            Inventory barang
        </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h2>Form update Barang</h2>
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
        </div>
        <div class="container">
        <form class="mt30" action="submit_update_barang.php" method="post" id="form_pakai_barang">
        <label for="id_barang">ID Barang:</label>
        <input type="text" id="id_barang" name="id_barang" required>
        <button type="button" id="search_button">Search</button> <!-- Tombol pencarian -->

        <label for="kode_barang">Kode Barang:</label>
        <input type="text" id="kode_barang" name="kode_barang" required>

        <label for="nama_barang">Nama Barang:</label>
        <input type="text" id="nama_barang" name="nama_barang" required>

        <label for="jumlah_barang">Jumlah Barang:</label>
        <input type="number" id="jumlah_barang" name="jumlah_barang" required>

        <label for="satuan_barang">Satuan Barang:</label>
        <input type="text" id="satuan_barang" name="satuan_barang" disabled>

        <label for="harga_beli">Harga Beli:</label>
        <input type="text" id="harga_beli" name="harga_beli" required>

        <!-- <label for="status_barang">Status Barang:</label>
        <input type="text" id="status_barang" name="status_barang" disabled> -->

        <input type="submit" value="Update">
    </form>

    <script>
    document.getElementById('search_button').addEventListener('click', function() {
        var id_barang = document.getElementById('id_barang').value;
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'data_update_barang.php?id_barang=' + id_barang, true);
        xhr.onload = function() {
            if (xhr.status === 200) {
                var data = JSON.parse(xhr.responseText);
                if (data.error) {
                    alert(data.error);
                } else {
                    document.getElementById('kode_barang').value = data.kode_barang;
                    document.getElementById('nama_barang').value = data.nama_barang;
                    document.getElementById('jumlah_barang').value = data.jumlah_barang;
                    document.getElementById('satuan_barang').value = data.satuan_barang;
                    document.getElementById('harga_beli').value = data.harga_beli;
                    // document.getElementById('status_barang').value = data.status_barang;
                }
            }
        };
        xhr.send();
    });
    document.getElementById('submit').addEventListener('click', function() {
        var id_barang = document.getElementById('id_barang').value;
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'submit_update_barang.php', true); // File PHP yang akan menangani penghapusan barang
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            if (xhr.status === 200) {
                var response = xhr.responseText;
                alert(response); // Menampilkan pesan dari server
                window.location.href = 'index.php'; // Kembali ke halaman index.php setelah menghapus barang
            }
        };
        xhr.send('id_barang=' + id_barang); // Mengirim ID barang yang akan dihapus ke file PHP
    });
    </script>
    </body>
</html>