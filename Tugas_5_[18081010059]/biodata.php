<?php
    include ('connection.php');

    $title = 'Jefri Abdurrozak Ismail | Biodata';
    $avatar = './asset/Human.png';
    $name = 'Jefri Abdurrozak Ismail';
    $pob = 'Surabaya, East Java, Indonesia';
    $dob = 'November 4th, 1999';
    $gender = 'Male';
    $religion = 'Islam';
    $address = 'Dukuh Kupang Gang Lebar 1A/15, Surabaya, Indonesia';
    $rtelepon = mysqli_query(connection(), "SELECT username FROM contactperson WHERE platform='telepon'");
    $remail = mysqli_query(connection(), "SELECT username FROM contactperson WHERE platform='email'");
    while ($row = $rtelepon->fetch_assoc()) {
        $phone = $row['username']."<br>";
    }
    while ($row = $remail->fetch_assoc()) {
        $email = $row['username']."<br>";
    }
?>

<html>
    <head>
        <title><?= $title ?></title>
        <!--Connect CSS-->
        <link rel="stylesheet" href="biodata.css">
    </head>
    <body id="umum">
        <!--Content frame-->
        <div id="container"></div>
        <div id="segment"></div>

        <!--Menu-->
        <svg id="barbiodata"></svg>
        <a id="home" href="./index.php">Home</a>
        <a id="biodata" href="./biodata.php">Biodata</a>
        <a id="academic" href="./academic.php">Academic</a>
        <a id="skills" href="./skills.php">Skills</a>

        <!--avatar-->
        <img id="avatarbio" src="<?= $avatar ?>" alt="">

        <!--Form data diri-->
        <p id='name'><?= $name ?></p>
        <p id='pob'>Place of birth</p>
        <p id='dob'>Date of birth</p>
        <p id='gender'>Gender</p>
        <p id='religion'>Religion</p>
        <p id='address'>Address</p>
        <p id='phone'>Phone</p>
        <p id='email'>E-mail</p>

        <!--Isi data diri-->
        <p id='isipob'><?= $pob?></p>
        <p id='isidob'><?= $dob?></p>
        <p id='isigender'><?= $gender?></p>
        <p id='isireligion'><?= $religion?></p>
        <p id='isiaddress'><?= $address?></p>
        <p id='isiphone'><?= $phone?></p>
        <p id='isiemail'><?= $email?></p>
    </body>
</html>