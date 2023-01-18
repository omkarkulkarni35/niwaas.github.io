<?php
include("connection.php");
error_reporting(0);
?>

<html>
    <head>
        <title>Niwaas Resort | Book room</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0,">
        <link rel="stylesheet" type="text/css" href="css/bookroom.css">
        <!-- Favicons -->
  <link href="images/fav.png" rel="icon">
  <link href="images/fav.png" rel="apple-touch-icon">
        <script>
          function myFunction(){
            var menulist =document.getElementById("menu");

            if(menulist.style.display =="block")
            {
              menulist.style.display ="none";
            }
            else{
              menulist.style.display ="block";
            }
          }
        </script>
    </head>
    <body>
        <div class="nav-bar">
            <img src="images/logo.png">
            <div class="menu-right">
              <span onclick="myFunction()">&#9776;</span>
              <ul id="menu">
                <li><a class="nav-link" href="index.php">Home</a></li>
                <li><a class="nav-link" href="exploreroom.php">Explore Rooms </a></li>
                <li class="active"><a class="nav-link" href="bookroom.php">Book Your Room</a></li>
                <li><a class="nav-link" href="onlinepay.php">Pay Online</a></li>
                <a href="login.php"> <input type="submit" name="" value="Admin Login" style="background:firebrick; color:white; height:35px; width:100px; font-size:15px; font-weight:700; cursor:pointer; border:0; border-radius:5px;"></a>
              </ul>
            </div>
          </div>
          <div class="container">
            <div class="title">BOOK YOUR ROOM</div>
            <form action="#" method="POST">
                <div class="form">
                <div class="input-box">
                    <label>First Name</label>
                    <input type="text" class="input" placeholder="Enter your First Name" name="firstname" required>
                </div>
    
                    <div class="input-box">
                        <label>Last Name</label>
                        <input type="text" class="input" placeholder="Enter your Last Name"name="lastname" required>
                    </div>
    
                        <div class="input-box">
                            <label>Email Address</label>
                            <input type="text" class="input" placeholder="Enter your Email" name="emailadd" required>
                        </div>
    
                            <div class="input-box">
                                <label>Phone Number</label>
                                <input type="phone" class="input" maxlength="10" placeholder="Enter your Number" name="phoneno" required>
                            </div>
                            
                                <div class="input-box">
                                    <label>Arrival Date</label>
                                    <input type="date" class="input" placeholder="Enter your Arrival Date" name="arrivaldate" required>
                                </div>
    
                                    <div class="input-box">
                                        <label>Leaving Date</label>
                                        <input type="date" class="input" placeholder="Enter your Leaving Date" name="leavingdate" required>
                                    </div>
    
                                        <div class="input-box">
                                            <label>No. Of Guests</label>
                                            <select class="selectbox" name="noofguests">
                                              <option>Select</option>
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                            </select>
                                        </div>
    
                                            <div class="input-box">
                                                <label>Room Type</label>
                                                <select class="selectbox" name="roomtype">
                                                  <option>Select</option>
                                                  <option>Standard Room</option>
                                                  <option>Semi-Luxurios Room</option>
                                                  <option>Luxurious Room</option>
                                                  <option>Delux Room</option>
                                                  <option>Twin Room</option>
                                                </select>
                                            </div>
                                            
                        <div class="button">
                            <input type="submit" value="Book Now" name="submitnow" class="btn" onclick="message()">
                        </div>
    <script>
      function message()
      {
        alert("Booking Request has been sent. Please Visit Our resort & Pay the Bill First")
      }
      </script>

            </form>   
              
            </div>
          </div>
            <footer class="tm-footer">
              <div class="tm-us">
              <p class="bold">About Us</p>
              <p>We provide luxury rooms 
                  which is only in Goa. This is our First branch.We 
                  provide a luxorious stay with various value
                  added and free services which will make
                  you visit us over and over again.</p>    
              </div>
             
              <div class="tm-address">
              <p class="bold">Address</p>
              <p>403001, NIWAAS RESORT, GOA, PANAJI
                  <br>
                  Phone : 12345678
                  Email : NIWAAS@info.com</p>    
              </div>
              <br/>
          </footer>
    </body>
    
</html>

<?php
if(isset ($_POST['submitnow']))

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$emailaddress=$_POST['emailadd'];
$phonenumber=$_POST['phoneno'];
$arrivaldate=$_POST['arrivaldate'];
$leavingdate=$_POST['leavingdate'];
$noofguests=$_POST['noofguests'];
$roomtype=$_POST['roomtype'];

if($firstname!="" && $firstname!="" && $firstname!="" && $lastname!=""&& $emailaddress!="" &&$phonenumber!="" && $arrivaldate!="" && $leavingdate!="" && $noofguests!="" && $roomtype!="")

{
$query="INSERT INTO BOOKINFO VALUES ('$firstname','$lastname','$emailaddress','$phonenumber','$arrivaldate','$leavingdate','$noofguests','$roomtype')";
$data=mysqli_query($conn,$query);


if($data)
{
  //echo "Data inserted";
}
}
else
{
  echo "Data not inserted";
}

?>