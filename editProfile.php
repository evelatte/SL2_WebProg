<?php
    include("config.php");
    if(isset($_GET['id'])){
        $str_query = "select * from user where nik = '".$_GET['id']."'";
        $query = mysqli_query($connection, $str_query);
        $row = mysqli_fetch_array($query);
    }
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
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
</head>
<body>
    <div class="navbar">
        <caption>Aplikasi Pengelolaan Keuangan</caption> 
        <a href="home.php" id="home">Home</a>
        <a href="profile.php" id="profile">Profile</a>
        <a href="logout.php" id="logout">Logout</a>
    </div>

    <br>

    <div class="title">
        Edit Profile
    </div>
    
    <form action="editProcess.php" method="post" enctype="multipart/form-data" id="form">
        <div class="section">
            <div class="content">
                <div class="input">
                    <div class="field">
                        Nama Depan 
                    </div>    
                    <input type="text" name="namadepan" id="namadepan" value="<?php echo $row['namadepan'];?>" required>
                </div>
                
                <div class="input">
                    <div class="field">
                        Tempat Lahir 
                    </div>
                    <input type="text" name="tempatlahir" id="tempatlahir" value="<?php echo $row['tempatlahir'];?>" required>
                </div>
                
                <div class="input">
                    <div class="field">
                        Warga Negara
                    </div>
                     <input type="text" name="warganegara" id="warganegara" value="<?php echo $row['warganegara'];?>" required>
                </div>
                
                <div class="input">
                    <div class="field">
                        Alamat 
                    </div>
                    <input type="text" name="alamat" id="alamat" value="<?php echo $row['alamat'];?>" required> 
                </div>    
            </div>
            
            <div class="content">
                <div class="input">
                    <div class="field">
                        Nama Tengah
                    </div>
                     <input type="text" name="namatengah" id="namatengah" value="<?php echo $row['namatengah'];?>" required>
                </div>

                <div class="input">
                    <div class="field">
                        Tgl Lahir
                    </div>
                    <input type="date" name="tgllahir" id="tgllahir" value="<?php echo $row['tgllahir'];?>" required>
                </div>

                <div class="input">
                    <div class="field">
                        Email 
                    </div>
                    <input type="email" name="email" id="email" value="<?php echo $row['email'];?>" required>
                </div>

                <div class="input">
                    <div class="field">
                        Kode Pos
                    </div>
                    <input type="number" name="kodepos" id="kodepos" value="<?php echo $row['kodepos'];?>" required> 
                </div>
            </div>
    
            <div class="content">
                <div class="input">
                    <div class="field">
                        Nama Belakang 
                    </div>
                    
                    <input type="text" name="namabelakang" id="namabelakang" value="<?php echo $row['namabelakang'];?>" required>
                </div>

                <div class="input">
                    <div class="field">
                        NIK 
                    </div>
                    <input type="number" name="nik" id="nik" value="<?php echo $row['nik'];?>" readonly>
                </div>

                <div class="input">
                    <div class="field">
                        No HP
                    </div>
                     <input type="number" name="nohp" id="nohp" value="<?php echo $row['nohp'];?>" required>
                </div>
                
                <div class="input">
                    <div class="field">
                        Foto Profil 
                    </div>
                   
                    <div class="imageBox">
                        <img src="<?php echo $row['fotodir'];?>" alt="">
                        <input type="file" name="foto" accept="image/*" id="file">
                    </div>      
                </div>
            </div>
        </div>
        
        <div class="msg" id="msg">
            <span class="erromsg"id= "errormsg" style= "color: red"></span>
        </div>
        
        <div class="buttons">
            <a href="profile.php"><input type="button" id="kembali" value="Kembali"></a>    
            <input type="submit" name="submit" value="Save" id="register">
        </div>
    </form>
</body>
</html>