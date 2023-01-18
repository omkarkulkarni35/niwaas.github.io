<?php
error_reporting(0);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "logindb";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    //echo "Connetion ok";
}
else
{
    echo "Connetion failed".mysqli_connect_error();

}
?>