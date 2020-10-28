<?php
    include ('connection.php');

    $title = 'Jefri Abdurrozak Ismail | Academic';
    $avatar = './asset/Academic.png';
    $line = './asset/Line 1.png';
    $ellipse1 = './asset/Ellipse 1.png';
    $ellipse2 = './asset/Ellipse 1.png';
    $ellipse3 = './asset/Ellipse 1.png';
    $ellipse4 = './asset/Ellipse 1.png';
    $ellipse5 = './asset/Ellipse 1.png';
    $ellipse6 = './asset/Ellipse 1.png';
    $tahunsd = '2012';
    $tahunsmp = '2015';
    $tahunsma = '2018';
    $tahunkuliah = 'Now';
    $sd = 'SDN Putat Jaya V/381 Surabaya';
    $smp = 'SMPN 4 Surabaya';
    $sma = 'SMAN 6 Surabaya';
    $kuliah = 'UPN "Veteran" Jawa Timur';
?>

<html>
    <head>
        <title><?= $title ?></title>
        <!--Connect CSS-->
        <link rel="stylesheet" href="academic.css">
    </head>
    <body id="umum">
        <!--Content frame-->
        <div id="container"></div>
        <div id="segment"></div>

        <!--Menu-->
        <svg id="baracademic"></svg>
        <a id="home" href="./index.php">Home</a>
        <a id="biodata" href="./biodata.php">Biodata</a>
        <a id="academic" href="./academic.php">Academic</a>
        <a id="skills" href="./skills.php">Skills</a>

        <!--avatar-->
        <img id="avataracademic" src="<?= $avatar ?>" alt="">

        <!--Header-->
        <p id="academic">Academic</p>

        <!--Timeline pict-->
        <img id="line" src="<?= $line ?>" alt="">
        <img id="ellipse1" src="<?= $ellipse1 ?>" alt="">
        <img id="ellipse2" src="<?= $ellipse2 ?>" alt="">
        <img id="ellipse3" src="<?= $ellipse3 ?>" alt="">
        <img id="ellipse4" src="<?= $ellipse4 ?>" alt="">
        <img id="ellipse5" src="<?= $ellipse5 ?>" alt="">
        <img id="ellipse6" src="<?= $ellipse6 ?>" alt="">

        <!--Timeline data-->
        <p id="tahunsd"><?= $tahunsd ?></p>
        <p id="sd"><?= $sd ?></p>
        <p id="tahunsmp"><?= $tahunsmp?></p>
        <p id="smp"><?= $smp?></p>
        <p id="tahunsma"><?= $tahunsma?></p>
        <p id="sma"><?= $sma?></p>
        <p id="tahunkuliah"><?= $tahunkuliah?></p>
        <p id="kuliah"><?= $kuliah?></p>
    <body>
<html>