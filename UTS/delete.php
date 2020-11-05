<?php
    require 'function.php';

    $SKU = $_GET['SKU'];
    hapus($SKU);

    echo " <script>
               document.location.href = 'index.php';
           </script>";
?>