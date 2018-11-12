<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<nav style="position: fixed; width: 100%; z-index: 100;" class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">TaraVel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="touristdest.php">Tourist Destinations</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="hotels.php">Hotels & Resorts</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="restaurants.php">Restaurants</a>
      </li>
      <li class="nav-item">
         <button class="btn btn-primary"  style="cursor: pointer; padding: 0px; margin-top: 8px; color: gray; font-weight: bold; margin-left: 150px;" onclick="openNav()">Search</button>
      </li>
    </ul> 


    <div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  <div class="overlay-content">
  <form>
    <!-- password -->
    <input style="width: 50%; height: 50px; position: center; display: inline-block;" type="password" class="form-control" id="exampleInputPassword1" >
    <button style="margin-top: -4px; position: center; height: 50px;  display: inline-block;" type="button" class="btn btn-secondary">Search</button>
    </form>
  </div>
</div>

<script>
function openNav() {
  document.getElementById("myNav").style.height = "50%";
}

function closeNav() {
  document.getElementById("myNav").style.height = "0%";
}
</script>
            <?php
              if (isset($_SESSION['u_id'])) {
               $headeremail = $_SESSION ['u_email'];


                 echo '<div class="dropdown">';
                echo "Hello ".$headeremail;
                echo '<div class="dropdown-content">';
                echo '<form form action="includes/logout.inc.php" method="POST">';
                echo '<p><a href="">Profile</a></p>';
                echo '<p><a href="">Bookings</a></p>';    
                echo '<hr>';
                echo '<p><button class="buttonlogout" type="submit" name="submit" style="border:none; margin-left:-5px; font-weight: bold; color:black; cursor: pointer;"> LOG OUT </button></p>';
                echo '</form>';
                echo '</div>';
                echo '</div>';



            


                /*

               


                 echo '<form form action="includes/logout.inc.php" method="POST">';
                echo '<p><button class="buttonlogout" type="submit" name="submit" style="border:none; margin-left:-5px; font-weight: bold; color:black; cursor: pointer;"> LOG OUT </button></p>';
                echo '</form>';
              

                */

              } else {
                echo '<form class="form-inline my-2 my-lg-0">';
                echo '<button type="button" class="btn btn-primary"><a href="login.php" style="color: white;">Log in</a></button>';
                echo '<button type="button" class="btn btn-primary"><a href="signup.php" style="color: white;">Sign up</a></button></form>'; 
              }
            ?>
  </div>
</nav>


