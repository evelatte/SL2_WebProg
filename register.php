<?php
    include("config.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="register.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
</head>
<body>
    <div class="title">
        Register
    </div>

    <form action="registerProcess.php" method="post" enctype="multipart/form-data" id="form">
        <div class="section">
            <div class="content">
                <div class="input">
                    <div class="field">
                        Nama Depan 
                    </div>    
                    <input type="text" name="namadepan" id="namadepan">
                </div>
                
                <div class="input">
                    <div class="field">
                        Tempat Lahir 
                    </div>
                    <input type="text" name="tempatlahir" id="tempatlahir">
                </div>
                
                <div class="input">
                    <div class="field">
                        Warga Negara
                    </div>
                     <input type="text" name="warganegara" id="warganegara">
                </div>
                
                <div class="input">
                    <div class="field">
                        Alamat 
                    </div>
                    <input type="text" name="alamat" id="alamat"> 
                </div>

                <div class="input">
                    <div class="field">
                        Username 
                    </div>
                    <input type="text" name="username" id="username"> 
                </div>     
            </div>
            
            <div class="content">
                <div class="input">
                    <div class="field">
                        Nama Tengah
                    </div>
                     <input type="text" name="namatengah" id="namatengah">
                </div>

                <div class="input">
                    <div class="field">
                        Tgl Lahir
                    </div>
                    <input type="date" name="tgllahir" id="tgllahir">
                </div>

                <div class="input">
                    <div class="field">
                        Email 
                    </div>
                    <input type="email" name="email" id="email">
                </div>

                <div class="input">
                    <div class="field">
                        Kode Pos
                    </div>
                    <input type="number" name="kodepos" id="kodepos"> 
                </div>

                <div class="input">
                    <div class="field">
                        Password1 
                    </div>
                    <input type="password" name="password1" id="password1">
                </div>
            </div>
    
            <div class="content">
                <div class="input">
                    <div class="field">
                        Nama Belakang 
                    </div>
                    
                    <input type="text" name="namabelakang" id="namabelakang">
                </div>

                <div class="input">
                    <div class="field">
                        NIK 
                    </div>
                    <input type="number" name="nik" id="nik">
                </div>

                <div class="input">
                    <div class="field">
                        No HP
                    </div>
                     <input type="number" name="nohp" id="nohp">
                </div>
                
                <div class="input">
                    <div class="field">
                        Foto Profil
                    </div>
                   <input type="file" name="foto" accept="image/*" id="file">
                </div>
                
                <div class="input">
                    Password2 <input type="password" name="password2" id="password2">
                </div>
            </div>
        </div>
        
        <div class="msg" id="msg">
            <span class="erromsg"id= "errormsg" style= "color: red"></span>
        </div>
        
        <div class="buttons">
            <a href="welcome.php"><input type="button" id="kembali" value="Kembali"></a>    
            <input type="submit" name="submit" value="Register" id="register">
        </div>
    </form>
</body>
<script src="script.js"></script>
</html>