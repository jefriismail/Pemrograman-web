<?php
    include 'function.php';

    $SKU = $_GET['SKU'];
    $result = cari($SKU);
    $target = mysqli_fetch_assoc($result);

    if(isset ($_POST["submit"])){
        ubah($_POST);
        echo " <script>
                    document.location.href = 'index.php';
                </script>";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Ubah Data Barang | Barokah</title>
        <link rel="stylesheet" href="main.css">
    </head>
    <body id="general">
        <div id="background"></div>
        <h1 id="judulupdate">Ubah Data Barang</h1>

            <h3 id="SKU">SKU Produk</h3>
            <h3 id="nama">Nama Barang</h3>    
            <h3 id="stok">Stok Barang</h3>
            <h3 id="harga">Harga Barang</h3>
            <h3 id="kategori">Kategori Barang</h3>
            <br><br>
        <form action="" method="post">
            <input id="SKU" type="text" name="SKU" value="<?=$target['SKU']?>">
            <input id="nama" type="text" name="nama" value="<?=$target['nama']?>">
            <input id="stok" type="text" name="stok" value="<?=$target['stok']?>">
            <input id="harga" type="text" name="harga" value="<?=$target['harga']?>">
            <input id="kategori" type="text" name="kategori" value="<?=$target['kategori']?>">
            <br><br>
            <button id="submit" type="submit" name="submit">Ubah data</button>
        </form>
    </body>
</html>