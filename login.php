<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="title">
        Login
    </div>

    <form action="loginProcess.php" method="post" id="loginForm">
        <div class="content">
            <div class="input">
                Username <input type="text" name="username" size="33" id="username"> 
            </div>  

            <div class="input">
                Password <input type="password" name="password1" size="33" id="password1">
            </div>    
        </div>    

        <div class="buttons">
            <input type="submit" name="submit" value="Login" id="Login">
            <a href="welcome.php"><input type="button" id="kembali" value="Kembali"></a>
        </div>
    </form>
</body>
</html>