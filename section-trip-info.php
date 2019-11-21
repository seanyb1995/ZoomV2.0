<div id="trip-info" class="trip-info">
  <div class="icon">
    <i class="fas fa-location-arrow"></i>
    <p>Origin</p>
  </div>
  <div class="progress">
    <h3 id="time"></h3>
    <?php
    if(isset($_SESSION['origin'])) {
        echo '<script type="text/javascript">  
             document.getElementById("trip-info").classList.add("flex");
             </script>'; 
     }
     ?>
    <input type="text" id="requestTime" name="time" value="<?php if(isset($_SESSION["time"])) { echo $_SESSION["time"]; } ?>" hidden/>
    <div class="bar">
      <div id="progress" class="progress"></div>
    </div>
    <p id="distance"><?php if(isset($_SESSION["arrival"])) { echo $_SESSION["arrival"]; } ?></p>
    <input type="text" id="requestDistance" name="distance" value="<?php if(isset($_SESSION["distance"])) { echo $_SESSION["distance"]; } ?>" hidden/>
  </div>
  <div class="icon">
    <i class="fas fa-map-marker-alt"></i>
    <p>Destination</p>
  </div>
</div>