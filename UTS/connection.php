<?php 

function connection() {
   // membuat konekesi ke database system
   $dbServer = 'localhost';
   $dbUser = 'root';
   $dbPass = '';
   $dbName = 'barokah';

   $conn = mysqli_connect($dbServer, $dbUser, $dbPass, $dbName);

   if(! $conn) {
	die('Koneksi gagal: ' . mysqli_error());
   }
	
   return $conn;
}
?>