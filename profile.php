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
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="profile.css">
</head>
<body>
    <div class="navbar">
        <caption>Aplikasi Pengelolaan Keuangan</caption> 
        <a href="home.php" id="home">Home</a>
        <a href="profile.php" id="profile">Profile</a>
        <a href="logout.php" id="logout">Logout</a>
    </div>

    <br> <br>

    <div class="title">
        Profil Pribadi
        <?php 
            echo "<a href='editProfile.php?id=".$_SESSION['nik']."' style='color: blue;'> Edit </a>";
        ?>
    </div>

        <div class="section">
            <div class="content">
                <div class="input">
                    <div class="field">
                        Nama Depan 
                    </div>
                    
                    <?php
                        if(!isset($_SESSION['namadepan'])){
                            header("Location: welcome.php");
                        }

                        else{
                            $namadepan = $_SESSION['namadepan'];
                            echo "<b>".$namadepan."</b>";
                        }    
                    ?>
                </div>
                
                <div class="input">
                    <div class="field">
                        Tempat Lahir
                    </div>
                    
                    <?php
                        $tempatlahir = $_SESSION['tempatlahir'];
                        echo "<b>".$tempatlahir."</b>";
                    ?>
                </div>
                
                <div class="input">
                    <div class="field">
                        Warga Negara
                    </div>
                        
                    <?php
                        $warganegara = $_SESSION['warganegara'];
                        echo "<b>".$warganegara."</b>";
                    ?>
                </div>
                
                <div class="input">
                    <div class="field">
                        Alamat
                    </div>
                     
                    <?php
                        $alamat = $_SESSION['alamat'];
                        echo "<b>".$alamat."</b>"; 
                    ?>
                </div>  
            </div>
            
            <div class="content">
                <div class="input">
                    <div class="field">
                        Nama Tengah
                    </div>
                    
                    <?php
                        $namatengah = $_SESSION['namatengah'];
                        echo "<b>".$namatengah."</b>";
                    ?>
                </div>

                <div class="input">
                    <div class="field">
                        Tgl Lahir
                    </div>
                     
                    <?php
                        $tgllahir = $_SESSION['tgllahir'];
                        echo "<b>".date('d-m-Y', strtotime($tgllahir))."</b>";
                    ?>
                </div>

                <div class="input">
                    <div class="field">
                        Email
                    </div>
                     
                    <?php
                        $email = $_SESSION['email'];
                        echo "<b>".$email."</b>";
                    ?>
                </div>

                <div class="input">
                    <div class="field">
                        Kode Pos
                    </div>
                    <?php
                        $kodepos = $_SESSION['kodepos'];
                        echo "<b>".$kodepos."</b>";
                    ?>
                </div>
            </div>
    
            <div class="content">
                <div class="input">
                    <div class="field">
                        Nama Belakang
                    </div>
                     
                    <?php
                        $namabelakang = $_SESSION['namabelakang'];
                        echo "<b>".$namabelakang."</b>";
                    ?>
                </div>

                <div class="input">
                    <div class="field">
                        NIK
                    </div> 
                    <?php
                        $nik = $_SESSION['nik'];
                        echo "<b>".$nik."</b>"; 
                    ?>
                </div>

                <div class="input">
                    <div class="field">
                        No HP
                    </div>
                     
                    <?php
                        $nohp = $_SESSION['nohp'];
                        echo "<b>".$nohp."</b>";
                    ?>
                </div>
                
                <div class="input">
                    <div class="field">
                        Foto Profil 
                    </div>
                   
                    <div class="imageBox">
                        <img src="<?php echo $_SESSION['file'];?>" alt="">
                    </div> 
                </div>
            </div>
        </div>      
</body>
</html>