<?php
    include ('connection.php');

    $title = 'Jefri Abdurrozak Ismail | Home';
    $profpic = './asset/IMG_20200826_150539.jpg';
    $category1 = 'IT Enthusiast';
    $category2 = 'Photographer';
    $name = 'Jefri Abdurrozak Ismail';
    $intro = '     I was born on November 4th 1999 at Surabaya and i am 20 years old now. I live in Surabaya for these years. I do not have any brother and sister but i have great relationship to all of my cousins. To kill silent in my house, i always play music all day and night.';
    $readmore = 'Read More ► ';
    $whatsapp = './asset/Asset 2.png';
    $facebook = './asset/Asset 3.png';
    $instagram = './asset/Asset 4.png';
    $rtelepon = mysqli_query(connection(), "SELECT username FROM contactperson WHERE platform='telepon'");
    $rfacebook = mysqli_query(connection(), "SELECT username FROM contactperson WHERE platform='facebook'");
    $rinstagram = mysqli_query(connection(), "SELECT username FROM contactperson WHERE platform='instagram'");
    while ($row = $rtelepon->fetch_assoc()) {
        $telepon = $row['username']."<br>";
    }
    while ($row = $rfacebook->fetch_assoc()) {
        $idfacebook = $row['username']."<br>";
    }
    while ($row = $rinstagram->fetch_assoc()) {
        $idinstagram = $row['username']."<br>";
    }
?>

<html>
    <head>
        
        <title><?= $title; ?></title>
        <!--Connect CSS-->
        <link rel="stylesheet" href="main.css">
        
    </head>
    <body id="umum">
        <!--Content frame-->
        <div id="container"></div>
        <div id="segment"></div>

        <!--Profpic-->
        <img id="profpic" src="<?= $profpic ?>" alt="">

        <!--Menu-->
        <svg id="barhome"></svg>
        <a id="home" href="./index.php">Home</a>
        <a id="biodata" href="./biodata.php">Biodata</a>
        <a id="academic" href="./academic.php">Academic</a>
        <a id="skills" href="./skills.php">Skills</a>

        <!--Category-->
        <svg id="category1"></svg>
        <svg id="category2"></svg>
        <p id="category1"><?= $category1 ?></p>
        <p id="category2"><?= $category2 ?></p>

        <!--Profile description-->
        <p id="profdesc"><?= $name ?></p>
        <p id="intro"><?= $intro ?></p>
        <a id="readmore" href="./biodata.php"><?= $readmore ?></a>

        <!--Find me-->
        <p id="findme">Find me at :</p>
        <img id="whatsapp" src="<?= $whatsapp ?>" alt="">
        <p id="telepon"><?= $telepon ?></p>;
        <img id="facebook" src="<?= $facebook ?>" alt="">
        <p id="idfacebook"><?= $idfacebook?></p>
        <img id="instagram" src="<?= $instagram?>" alt="">
        <p id="idinstagram"><?= $idinstagram?></p>
    </body>
</html>