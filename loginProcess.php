<?php
    include("config.php");

    if(isset($_POST["submit"])){
        $username = $_POST["username"];
        $password = $_POST["password1"];

        $str_query = "select * from user where username = '$username' and password = '$password'";
        $query = mysqli_query($connection, $str_query);

        $check = mysqli_num_rows($query);

        if($check > 0){
            session_start();
            $row = mysqli_fetch_array($query);

            $username = $row['username'];
            $password1 = $row['password1'];
            $password2 = $row['password2'];
            $nohp =$row['nohp'];

            $_SESSION['namadepan'] =  $row['namadepan'];
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
            $_SESSION['file'] = $row['fotodir'];

            header("Location: home.php");
        }

        else{
            echo "Maaf login belum berhasil";
            header("Location: login.php");
        }

        // echo $_POST["username"]."<br>";
        // echo $_POST["password1"]."<br>"; 
    }
?>

