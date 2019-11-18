<div id="output" class="input">
  <div class="destination-input">
    <!--icon-->
    <div class="icon">
      <i class="fas fa-location-arrow"></i>
    </div>
    <!--origin output-->
    <div class="text">
      <input type="text" id="origin-output" name="origin-output" placeholder="" value="<?php if(isset($_SESSION["origin"])) { echo $_SESSION["origin"]; } ?>" required/>
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
      <input type="text" id="destination-output" name="destination-output" placeholder="" value="<?php if(isset($_SESSION["destination"])) { echo $_SESSION["destination"]; } ?>" required/>
      <label>Destination</label>
    </div>
  </div>
</div>