<?php
/* 
* Page: Dashboard Page
*/
include('authentication.php');

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
  <script src="https://kit.fontawesome.com/845c12c9ef.js" crossorigin="anonymous"></script>
  
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
         <!--origin input-->
          <div id="origin" class="input">
            <!--icon-->
            <div class="icon">
              <i class="fas fa-location-arrow"></i>
            </div>
            <!--username-->
            <div class="text">
              <input type="text" id="origin-input" name="origin" placeholder="" value="" required/>
              <input type="text" id="latlng" hidden/>
              <input type="text" id="getLocation" value="Reverse Geocode" hidden/>
              <label>Origin</label>
            </div>
          </div>
          <!--destination input-->
          <div id="controls" class="input">
            <div class="destination-input">
              <!--icon-->
              <div class="icon">
                <i class="fas fa-map-marker-alt"></i>
              </div>
              <!--username-->
              <div class="text">
                <input type="text" id="destination-input" name="destination" placeholder="" value="" required/>
                <label>Destination</label>
              </div>
            </div>
            <div class="destination-input">
              <!--icon-->
              <div class="icon">
                <i class="fas fa-history"></i>
              </div>
              <!--username-->
              <div class="text">
                <input type="text" id="recent" name="recent" placeholder="" value="" required/>
                <label>Recent</label>
              </div>
            </div>
            <div class="destination-input">
              <!--icon-->
              <div class="icon">
                <i class="fas fa-star"></i>
              </div>
              <!--username-->
              <div class="text">
                <input type="text" id="favourite" name="favourite" placeholder="" value="" required/>
                <label>Favourite</label>
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
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCAywbPa8_RyuamLyD_kxoMxZnvhsw9JKY&libraries=places&callback=initMap"type="text/javascript"></script>  
  <script src="js/google.js" type="text/javascript"></script>
  
</body>

</html>