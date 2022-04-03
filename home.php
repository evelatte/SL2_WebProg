<?php
    include("config.php");
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <div class="navbar">
        <caption>Aplikasi Pengelolaan Keuangan</caption> 
        <a href="home.php" id="home">Home</a>
        <a href="profile.php" id="profile">Profile</a>
        <a href="logout.php" id="logout">Logout</a>
    </div>
    <div class="text">
        <?php
            if(!isset($_SESSION['namadepan'])){
                header("Location: login.php");
            }

            else{
                $namadepan = $_SESSION['namadepan'];
                $namatengah = $_SESSION['namatengah'];
                $namabelakang = $_SESSION['namabelakang'];

                echo "Halo,&nbsp"."<b>".$namadepan." ".$namatengah." ".$namabelakang."</b>. Selamat Datang di Aplikasi Pengelolaan Keuangan";

            }    
        ?>
    </div>
</body>
</html>