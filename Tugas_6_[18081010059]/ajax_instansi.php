<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('connection.php'); 


  //melakukan pengecekan apakah ada variable GET yang dikirim
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['id'])) {
          //query SQL
          $id = $_GET['id'];
          $query = "SELECT * FROM pendidikan WHERE id = '$id'"; 

          //eksekusi query
          $result = mysqli_query(connection(),$query);

          $data = mysqli_fetch_array($result);
            echo $data['nama'].'||'.$data['tahun'];
        }  
  }