<?php
error_reporting(0);
$servername="localhost";
$username="root";
$password="";
$dbname="bookroomdb";

$conn= mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    //echo "connetion ok";
}
else
{
    echo "connetion failed".mysqli_connnect_error();
}
?>