<?php
    include("config.php");
    session_start();

    if(isset($_POST["submit"])){
        $imagename = $_FILES['foto']['name'];
        $tmp_name = $_FILES['foto']['tmp_name'];
        $directory = "image/";
        $strquery = "";

        if($imagename == "") {
            // echo "tdk ada file";
            // echo $_SESSION['file'];
            
            $str_query = "update user set namadepan='".$_POST["namadepan"]."', namatengah='".$_POST["namatengah"]."', namabelakang='".$_POST["namabelakang"]."', tempatlahir='".$_POST["tempatlahir"]."', tgllahir='".$_POST["tgllahir"]."', warganegara='".$_POST["warganegara"]."', email='".$_POST["email"]."', nohp='".$_POST["nohp"]."', alamat='".$_POST["alamat"]."', kodepos='".$_POST["kodepos"]."' where nik = '".$_POST["nik"]."'";

            //echo "<br>".$str_query."<br>";
        }

        else if(!$imagename == ""){
            //echo $imagename;
            $upload = move_uploaded_file($tmp_name, $directory.$imagename);

            $str_query = "update user set namadepan='".$_POST["namadepan"]."', namatengah='".$_POST["namatengah"]."', namabelakang='".$_POST["namabelakang"]."', tempatlahir='".$_POST["tempatlahir"]."', tgllahir='".$_POST["tgllahir"]."', warganegara='".$_POST["warganegara"]."', email='".$_POST["email"]."', nohp='".$_POST["nohp"]."', alamat='".$_POST["alamat"]."', kodepos='".$_POST["kodepos"]."', fotodir='".$directory.$imagename."' where nik = '".$_POST["nik"]."'";

            $_SESSION['file'] = $directory.$imagename;
        }

        $row = mysqli_fetch_array(mysqli_query($connection, "select * from user where nik = '".$_POST["nik"]."'"));
        
        $_SESSION['namadepan'] = $row['namadepan'];
        $_SESSION['tempatlahir'] = $row['tempatlahir'];
        $_SESSION['warganegara'] = $row['warganegara'];
        $_SESSION['alamat'] = $row['alamat'];
        
        $_SESSION['namatengah'] = $row['namatengah'];
        $_SESSION['tgllahir'] = $row['tgllahir'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['kodepos'] = $row['kodepos'];

        $_SESSION['namabelakang'] = $row['namabelakang'];
        $_SESSION['nik'] = $row['nik'];
        $_SESSION['nohp'] = $row['nohp'];
                    
        $_SESSION['username'] = $row['username'];
        $_SESSION['password1'] = $row['password'];
        
        $query = mysqli_query($connection, $str_query);
        if($query){
             header("location:profile.php");
        }

        else{
             echo "Proses edit gagal".mysqli_error($connection);
        }
    }
?>