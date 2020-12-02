<?php
    include ('connection.php');

    $title = 'Jefri Abdurrozak Ismail | Academic';
    $avatar = './asset/Academic.png';
    
    //ambil data dari database
    $query = "SELECT * FROM pendidikan";
    $result = mysqli_query(connection(), $query);
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
        <table id="jenjang" cellspacing=20>
            <tr>
                <td>Jenjang</td>
                <td>
                    <select id="isijenjang">
                        <option value="">--- PILIH JENJANG PENDIDIKAN ---</option>
                        <?php while($data = mysqli_fetch_array($result)): ?>
                            <option value="<?php echo $data['id'] ?>"><?php echo  $data['jenjang']?></option>
                        <?php endwhile; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Instansi</td>
                <td><input type="text" id="load_instansi" disabled></td>
            </tr>
            <tr>
                <td>Tahun Lulus</td>
                <td><input type="text" id="load_tahun" disabled></td>
            </tr>
            <tr>
                <td>
                    <!--Insert button-->
                    <button id="insertpendidikan">Tambah data</button>
                </td>
                <td>
                    <button>Ubah data</button>
                    <button>Hapus data</button>
                </td>
            </tr>
        </table>
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

    //ajax pemilihan jenjang
    $("#isijenjang").on("change",function(){
		$("#load_instansi").show();
        var $id= $("#isijenjang").val();
        $.ajax({
            type: "GET",
            url: "ajax_instansi.php?id=" + $id,
            success:function(msg){
                var gabungan = msg.split("||");
                $("#load_instansi").val(gabungan[0]);
                $("#load_tahun").val(gabungan[1]);
            }
        });
    });

    //insert button
    $('#insertpendidikan').click(function () { 
        window.location.href="insertacademic.php";
    });
</script>