<?php
    require 'function.php';

    $result = baca();
    
    if(!$result){
        echo mysqli_error($conn);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Data Barang | Barokah</title>
        <link rel="stylesheet" href="main.css">
    </head>
    <body id="general">
    <div id="background"></div>
        <h1 id="judul">Informasi Barang</h1>
        <a href="insert.php" id="insert">Tambah Data</a>
        <table border='1' cellpadding='10' cellspacing="0" id="tabel">
            <tr>
                <th id="isitabel">No.</th>
                <th id="isitabel">SKU</th>
                <th id="isitabel">Nama</th>
                <th id="isitabel">Stok</th>
                <th id="isitabel">Harga Satuan</th>
                <th id="isitabel">Kategori</th>
                <th id="isitabel">Aksi</th>
            </tr>
            <?php $i=1;?>
            <?php while($baris = mysqli_fetch_assoc($result)) :?>
            <tr>
                <td id="isitabel"><?php echo $i;?></td>
                <td id="isitabel"><?php echo $baris['SKU'];?></td>
                <td id="isitabel"><?php echo $baris['nama'];?></td>
                <td id="isitabel"><?php echo $baris['stok'];?></td>
                <td id="isitabel"><?php echo $baris['harga'];?></td>
                <td id="isitabel"><?php echo $baris['kategori'];?></td>
                <td id="isitabel">
                    <a href="update.php?SKU=<?= $baris['SKU']?>">Ubah</a> |
                    <a href="delete.php?SKU=<?= $baris['SKU']?>" onclick="
                        return confirm('Yakin ingin menghpus data?');">Hapus</a>
                </td>
            </tr>
            <?php $i++ ;?>
            <?php endwhile ;?>
        </table>
    </body>
</html>