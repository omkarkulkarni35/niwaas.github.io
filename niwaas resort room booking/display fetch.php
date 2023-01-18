<?php

include("connection.php");
$query = "SELECT * FROM bookinfo";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
$result = mysqli_display fetch_assoc($data);

echo $result['FIRST NAME']." ".$result['LAST NAME'];
//echo $total;
if($total!= 0)

?>