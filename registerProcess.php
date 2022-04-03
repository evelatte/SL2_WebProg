<?php
    include("config.php");

    if(isset($_POST["submit"])){
        $imagename = $_FILES['foto']['name'];
        $tmp_name = $_FILES['foto']['tmp_name'];
        $directory = "image/";
        $upload = move_uploaded_file($tmp_name, $directory.$imagename);

        $str_query = "insert into user values('".$_POST["nik"]."', '".$_POST["namadepan"]."', '".$_POST["namatengah"]."', '".$_POST["namabelakang"]."', '".$_POST["tempatlahir"]."', '".$_POST["tgllahir"]."', '".$_POST["warganegara"]."', '".$_POST["email"]."', '".$_POST["nohp"]."', '".$_POST["alamat"]."', '".$_POST["kodepos"]."', '".$_POST["username"]."', '".$_POST["password1"]."', '".$directory.$imagename."')";

        // echo $_POST["nik"]."<br>";
        // echo $_POST["namadepan"]."<br>"; 
        // echo $_POST["namatengah"]."<br>"; 
        // echo $_POST["namabelakang"]."<br>";
        // echo $_POST["tempatlahir"]."<br>";
        // echo $_POST["tgllahir"]."<br>";
        // echo $_POST["warganegara"]."<br>";
        // echo $_POST["email"]."<br>";
        // echo $_POST["nohp"]."<br>";
        // echo $_POST["alamat"]."<br>";
        // echo $_POST["kodepos"]."<br>";
        // //echo $_POST["foto"]."<br>";
        // echo $_POST["username"]."<br>";
        // echo $_POST["password1"]."<br>"; 
        // echo $directory.$imagename."<br>";
        
        $query = mysqli_query($connection, $str_query);

        if($query){
             header("location:welcome.php");
        }

        else{
             echo "Proses daftar gagal".mysqli_error($connection);
        }
    }
?>