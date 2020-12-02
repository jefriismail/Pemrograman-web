<?php
    include ('connection.php');

    $title = 'Jefri Abdurrozak Ismail | Academic';
    $avatar = './asset/Academic.png';
    
    //ambil data dari database
    $query = "SELECT * FROM pendidikan";
    $result = mysqli_query(connection(), $query);

    //simpan data  
    if(isset ($_POST["submit"])){
        var_dump($_POST);
        $jenjang = $_POST['isijenjang'];
        $nama = $_POST['load_instansi'];
        $tahun = $_POST['load_tahun'];
        $query = "INSERT INTO pendidikan VALUES ('', '$jenjang', '$nama', '$harga')";
        mysqli_query(connection(), $query);
        echo " <script>
                    document.location.href = 'academic.php';
                </script>";
    }
?>

<html>
    <head>
        <title><?= $title ?></title>

        <!--Connect Jquery-->
        <script src="js/jquery.js"></script>

        <!--Connect CSS-->
        <link rel="stylesheet" href="academic.css">
    </head>
    <body id="umum">
        <!--Content frame-->
        <div id="container"></div>
        <div id="segment"></div>

        <!--Menu-->
        <svg id="baracademic"></svg>
        <a id="home">Home</a>
        <a id="biodata">Biodata</a>
        <a id="academic">Academic</a>
        <a id="skills">Skills</a>

        <!--avatar-->
        <img id="avataracademic" src="<?= $avatar ?>" alt="">

        <!--Header-->
        <p id="academic">Academic</p>

        <!--Option-->
        <form method="post">
        <table id="jenjang" cellspacing=20>
            <tr>
                <td>Jenjang</td>
                <td>
                <select id="isijenjang">
                        <option>--- PILIH JENJANG PENDIDIKAN ---</option>

                        <option id="SD">SD</option>
                        <option id="SMP">SMP</option>
                        <option id="SMA">SMA</option>
                        <option id="S1">S1</option>
                        <option id="S2">S2</option>
                        <option id="S3">S3</option>
                </select>
                </td>
            </tr>
            <tr>
                <td>Instansi</td>
                <td><input type="text" id="load_instansi"></td>
            </tr>
            <tr>
                <td>Tahun Lulus</td>
                <td><input type="text" id="load_tahun"></td>
            </tr>
        </table>
        <button id="submit" type="submit" name="submit">Tambah data</button>
        </form>
    <body>
<html>

<script>
    //Fungsi menu
    $('#home').click(function () { 
        $(this).attr("href", "./index.php");
    });
    $('#biodata').click(function () { 
        $(this).attr("href", "./biodata.php");
    });
    $('#academic').click(function () { 
        $(this).attr("href", "./academic.php");
    });
    $('#skills').click(function () { 
        $(this).attr("href", "./skills.php");
    });

</script>