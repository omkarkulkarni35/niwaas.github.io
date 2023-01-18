<!DOCTYPE html>
<html>
    <head>
        <meta charset="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <title>Admin Login</title>
    </head>
    <body>
        <form action="#" method="POST">
            <div class="center">
            <h1>Admin Login</h1>
            
            <div class="form">
                <input type="text" name="username" class="textfiled" placeholder="Username">
                <input type="password" name="password" class="textfiled" placeholder="Password">
        
            
                <input type="submit" name="login" value="login" class="btn">
        
                
            </div>
        </div>
    </form>

    </body>
</html>

<?php
include("loginconnection.php");

if(isset($_POST['login']))
{
    $username =  $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM logintab WHERE username = '$username' && password = '$password'";
    $data = mysqli_query($conn, $query);

    $total = mysqli_num_rows($data);
    echo $total;

    if($total == 1)
    {
        //echo "Login ok";
        header('location:fetch.php');

    }
    else
    {
        echo "Login Failed";
    }
}

?>