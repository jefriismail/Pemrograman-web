<?php
    include 'function.php';

    if(isset ($_POST["submit"])){
        tambah($_POST);
        echo " <script>
                    document.location.href = 'index.php';
                </script>";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Input Barang | Barokah</title>
        <link rel="stylesheet" href="main.css">
    </head>
    <body id="general">
        <div id="background"></div>
        <h1 id="judulinsert">Input Barang</h1>
        <form action="" method="post">
            <h3 id="SKU">SKU Produk</h3>
            <input id="SKU" type="text" name="SKU">
            <h3 id="nama">Nama Barang</h3>
            <input id="nama" type="text" name="nama">
            <h3 id="stok">Stok Barang</h3>
            <input id="stok" type="text" name="stok">
            <h3 id="harga">Harga Barang</h3>
            <input id="harga" type="text" name="harga">
            <h3 id="kategori">Kategori Barang</h3>
            <input id="kategori" type="text" name="kategori">
            <br><br>
            <button id="submit" type="submit" name="submit">Tambah Data</button>
        </form>
    </body>
</html>