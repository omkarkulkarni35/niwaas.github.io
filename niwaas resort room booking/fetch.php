<html>
    <head>
        <title>BOOKINFO RECORDS</title>
</head>
<body>
    <style>
        body{
            background-color:lightblue;
        }
    </style>
    <table border ="4" cellspacing="7" width="100%" >
    <tr>
        <th>FIRST NAME</th>
        <th>LAST NAME</th>
        <th>EMAIL ADDRESS</th>
        <th>PHONE NUMBER</th>
        <th>ARRIVAL DATE</th>
        <th>LEAVING DATE</th>
        <th>NO.OF GUESTS</th>
        <th>ROOM TYPE</th>
        
</tr>
</head>
</body>
<a href="index.php"> <input type="submit" name="" value="Logout" style="background:orange; colour:white; height:35px; width:100px; font-size:18px; margin-top:15px; margin-bottom:15px;  cursor:pointer; border:0; border-radius:5px;"></a>
    </html>

<?php
error_reporting(0);
include("connection.php");
$query = "SELECT * FROM bookinfo";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);



//echo $total;
if($total!=0)
{
    $result = mysqli_fetch_assoc($data);
    while(($result=mysqli_fetch_assoc($data)))
    {
        echo "<tr>
              <td>".$result['FIRST NAME']."</td>
              <td>".$result['LAST NAME']."</td>
              <td>".$result['EMAIL ADDRESS']."</td>
              <td>".$result['PHONE NUMBER']."</td>
              <td>".$result['ARRIVAL DATE']."</td>
              <td>".$result['LEAVING DATE']."</td>
              <td>".$result['NO. OF GUESTS']."</td>
              <td>".$result['ROOM TYPE']."</td>
              
              </tr>
          ";
    }
}


?>