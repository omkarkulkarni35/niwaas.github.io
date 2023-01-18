<!DOCTYPE html>
<html>
    <head>
        <title>Niwaas Resort | Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0,">
         <link rel="stylesheet" type="text/css" href="css/index.css">
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
            <li class="active"><a class="nav-link" href="index.php">Home</a></li>
            <li><a class="nav-link" href="exploreroom.php">Explore Rooms </a></li>
            <li><a class="nav-link" href="bookroom.php">Book Your Room</a></li>
            
            <a href="login.php"> <input type="submit" name="" value="Admin Login" style="background:firebrick; color:white; height:35px; width:100px; font-size:15px; font-weight:700; cursor:pointer; border:0; border-radius:5px;"></a>
          </ul>
        </div>
      </div>

      <section class="heading">
        <video autoplay loop class="video-background" muted plays-inline>
            <source src="images/video.mp4" type="video/mp4"> 
        </video>
      </section>
      
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