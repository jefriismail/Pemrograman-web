<?php
    require 'connection.php';
    
    function tambah($data){
        $SKU = $data['SKU'];
        $nama = $data['nama'];
        $harga = $data['harga'];
        $stok = $data['stok'];
        $kategori = $data['kategori'];
        
        $query = "INSERT INTO barang VALUES ('$SKU', '$nama', $stok, $harga, '$kategori')";
    
        mysqli_query(connection(), $query);
    }

    function baca(){
        $query = "SELECT * FROM barang";
        $result = mysqli_query(connection(), $query);

        return $result;
    }

    function cari($SKU){
        $query = "SELECT * FROM barang WHERE SKU = $SKU";
        $result = mysqli_query(connection(), $query);

        return $result;
    }

    function ubah($data){
        $SKU = $data['SKU'];
        $nama = $data['nama'];
        $harga = $data['harga'];
        $stok = $data['stok'];
        $kategori = $data['kategori'];
        
        $query = "UPDATE barang SET
                    SKU = '$SKU',
                    nama = '$nama',
                    harga = $harga,
                    stok = $stok,
                    kategori = '$kategori'
                WHERE SKU = $SKU";

                var_dump($query);
        mysqli_query(connection(), $query);
    }

    function hapus($SKU){
        $query = "DELETE FROM barang WHERE SKU = $SKU";
        mysqli_query(connection(), $query);
    }
?>