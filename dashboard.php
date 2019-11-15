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
         <!--origin and destination output-->
          <div id="output" class="input">
            <div class="destination-input">
              <!--icon-->
              <div class="icon">
                <i class="fas fa-location-arrow"></i>
              </div>
              <!--origin output-->
              <div class="text">
                <input type="text" id="origin-output" name="origin-output" placeholder="" value="" required/>
                <label>Origin</label>
              </div>
            </div>
            <hr>
            <div class="destination-input">
              <!--icon-->
              <div class="icon">
                <i class="fas fa-map-marker-alt"></i>
              </div>
              <!--destination output-->
              <div class="text">
                <input type="text" id="destination-output" name="destination-output" placeholder="" value="" required/>
                <label>Destination</label>
              </div>
            </div>
          </div>
         <!--origin input-->
          <div id="origin" class="input">
            <!--icon-->
            <div class="icon">
              <i class="fas fa-location-arrow"></i>
            </div>
            <!--origin-->
            <div class="text">
              <input type="text" id="origin-input" name="origin" placeholder="" value="" required/>
              <input type="text" id="latlng" hidden/>
              <input type="text" id="getLocation" value="Reverse Geocode" hidden/>
              <label>Origin</label>
            </div>
          </div>
          <!-- owl carousel -->
          <div class="owl-carousel">
            <!--vehicle 1-->
            <div class="card">
              <!--car front on image-->
              <div class="image">
                <img src="https://d3h256n3bzippp.cloudfront.net/Model-S-white-background-2-2.jpg" alt="car">
              </div>
              <div class="text">
                <!--vehicle model and tranmission-->
                <div class="car-info">
                  <h3>Tesla S</h3>
                  <p>Driverless car</p>
                </div>
                <!--trip cost-->
                <div class="price">
                  <h3>$6</h3>
                </div>
              </div>
            </div>
            <!--vehicle 2-->
            <div class="card">
              <!--car front on image-->
              <div class="image">
                <img src="https://d3h256n3bzippp.cloudfront.net/Model-S-white-background-2-2.jpg" alt="car">
              </div>
              <!--vehicle model and tranmission-->
              <div class="text">
                <div class="car-info">
                  <h3>Tesla S</h3>
                  <p>Driverless car</p>
                </div>
                <div class="price">
                  <!--trip cost-->
                  <h3>$6</h3>
                </div>
              </div>
            </div>
            <!--vehicle 3-->
            <div class="card">
              <div class="image">
                <img src="https://d3h256n3bzippp.cloudfront.net/Model-S-white-background-2-2.jpg" alt="car">
              </div>
              <div class="text">
                <div class="car-info">
                  <h3>Tesla S</h3>
                  <p>Driverless car</p>
                </div>
                <div class="price">
                  <!--trip cost-->
                  <h3>$6</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="card-selected">
          <!--card details-->
          <div class="car-details">
            <!--text-->
            <div class="text">
              <div class="vehicle">
                <h3>Tesla S</h3>
                <p>Driverless</p>
              </div>
              <div class="trips">
                <h3>400</h3>
                <p>Completed trips</p>
              </div>
              <div class="rating">
                <h3>5.0*</h3>
                <p>Saftey rating</p>
              </div>
            </div>
            <!--image-->
            <div class="image">
              <img src="https://image.shutterstock.com/image-illustration/white-elegant-car-top-view-260nw-1298950867.jpg">
            </div>
          </div>
          <!--trip details-->
          <div class="trip-details">
            <div class="location">
              <div class="pick">
                <div class="icon">
                  <i class="fas fa-location-arrow"></i>
                </div>
                <div class="text">
                  <p>Pick up</p>
                  <p>XYZ</p>
                </div>
              </div>
              <div class="break">
                <div class="icon">
                  <i class="fas fa-ellipsis-v"></i>
                </div>
              </div>
              <div class="drop">
                <div class="icon">
                  <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="text">
                  <p>Pick up</p>
                  <p>XYZ</p>
                </div>
              </div>
            </div>
            <div class="time">
              <div class="pick">
                <div class="text">
                  <h1>2 min</h1>
                </div>
              </div>
              <div class="drop">
                <div class="text">
                  <h1>9:41 am</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
          <!--destination input-->
          <div id="controls" class="input">
            <div class="destination-input">
              <!--icon-->
              <div class="icon">
                <i class="fas fa-map-marker-alt"></i>
              </div>
              <!--destination-->
              <div class="text">
                <input type="text" id="destination-input" name="destination" placeholder="" value="" required/>
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
  <script src="owlcarousel/owl.carousel.min.js"></script>`
  <script src="js/carousel.js"></script>`
  <script src="https://kit.fontawesome.com/845c12c9ef.js" crossorigin="anonymous"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCAywbPa8_RyuamLyD_kxoMxZnvhsw9JKY&libraries=places&callback=initMap"type="text/javascript"></script>  
  <script src="js/google.js" type="text/javascript"></script>
  
</body>

</html>