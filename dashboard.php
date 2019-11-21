<?php
/* 
* Page: Dashboard Page
*/
include('authentication.php');
include('request.php');

// access restriction
 if(empty($_SESSION['username'])) {
     header('location: login.php');
 }

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Zoom</title>
  <meta name="author" content="">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="css/normalize.css" rel="stylesheet">
  <link href="css/style.min.css" rel="stylesheet">
  <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
  <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
  
</head>

<body>
  
  <!--content-->
  <section class="content">
    <!--container-->
    <div class="container">
      <!--mobile-->
      <div class="mobile">
        <!--welcome message-->
        <h1><?php // echo $_SESSION['success']; ?></h1>
        <form id="dashboard" action="dashboard.php" method="POST">
          <div id="overlay"></div>
         <!--ride info-->
         <?php include('section-trip-info.php'); ?>
         <!--origin and destination output-->
         <?php include ('section-origin-destination-output.php'); ?>
         <!--origin input-->
          <div id="origin" class="input">
            <!--icon-->
            <div class="icon">
              <i class="fas fa-location-arrow"></i>
            </div>
            <!--origin-->
            <div class="text">
              <input type="text" id="origin-input" name="origin" placeholder="" value="<?php if(isset($_SESSION["origin"])) { echo $_SESSION["origin"]; } ?>" required/>
              <?php
              if(isset($_SESSION['origin'])) {
                  echo '<script type="text/javascript">  
                       document.getElementById("origin").style.display = "none";
                       </script>'; 
               }
               ?>
              <input type="text" id="latlng" value="" hidden/>
              <input type="button" id="getLocation" value="Reverse Geocode" hidden/>
              <label>Origin</label>
            </div>
          </div>
          <!--vehicles-->
          <?php include('section-vehicles.php'); ?>
          <!--card selected-->
          <?php include('section-card-selected.php') ?>
          <!--trip reciept-->
          <?php include('section-receipt.php'); ?>
          <!--destination input-->
          <div id="controls" class="input">
            <div class="destination-input">
              <!--icon-->
              <div class="icon">
                <i class="fas fa-map-marker-alt"></i>
              </div>
              <!--destination-->
              <div class="text">
                <input type="text" id="destination-input" name="destination" placeholder="" value="<?php if(isset($_SESSION["destination"])) { echo $_SESSION["destination"]; } ?>" required/>
                <?php
                if(isset($_SESSION['destination'])) {
                    echo '<script type="text/javascript">  
                         document.getElementById("controls").style.display = "none";
                         </script>'; 
                 }
                 ?>
                <label>Destination</label>
              </div>
            </div>
          </div>
        </form>
        <p><a href="login.php?logout='1'">Logout</a></p>
        <!--google map-->
        <div id="map"></div>
      </div>
    </div>
  </section>

  <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
  <script src="js/gsap-latest-beta.min.js" type="text/javascript"></script>
  <script src="owlcarousel/owl.carousel.min.js" type="text/javascript"></script>`
  <script src="js/carousel.js" type="text/javascript"></script>`
  <script src="js/ride.js" type="text/javascript"></script>
  <script src="https://kit.fontawesome.com/845c12c9ef.js" crossorigin="anonymous" type="text/javascript"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCAywbPa8_RyuamLyD_kxoMxZnvhsw9JKY&libraries=places&callback=initMap"type="text/javascript"></script>
  <script src="js/google.js" type="text/javascript"></script>
  <script src="js/animations.js"></script>
  
</body>

</html>