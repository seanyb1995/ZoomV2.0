<div class="card-selected">
  <hr id="close-indicator">
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
          <div class="origin">
            <p>Pick up</p>
            <p id="pick-up"></p>
          </div>
          <div class="arrival">
            <h1>2 min</h1>
          </div>
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
          <div class="origin">
            <p>Drop off</p>
            <p id="drop-off"></p>
          </div>
          <div class="arrival">
            <h1 id="arrival-time"></h1>
          </div>
         </div>
      </div>
    </div>
    <input id="username" type="text" name="username" value="<?php if(isset($_SESSION["username"])) { echo $_SESSION["username"]; } ?>" hidden/>
    <input id="request" type="submit" name="request" value="Request driver"/>
  </div>
</div>