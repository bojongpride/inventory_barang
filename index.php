<html>
    <head>
        <title>
            Inventory barang
        </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h2>List Barang</h2>
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
        <table id="myTable" class="display">
            <tr>
                <th>ID Barang</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Jumlah Barang</th>
                <th>Satuan Barang</th>
                <th>Harga Barang</th>
                <th>Status Barang</th>
            </tr>
            <tr class="content">
            <?php include 'data_index.php'; ?>
            </tr>
        </table>
        </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.6/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
        
    </body>
</html>