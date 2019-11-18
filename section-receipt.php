<div class="trip-summary flex">
  <div class="car">
    <div class="company">
      <h1>Zoom</h1>
    </div>        
    <div class="model">
      <h3>Tesla Model S</h3>
      <p>Driverless</p>
    </div>
  </div>
  <div class="placeholder">
    <img src="img/png/tesla-s-model.png" alt="car">
  </div>
  <div class="trip">
    <div class="summary">
      <div class="cost">
        <h3>Thank you!</h3>
        <h1>$6.00</h1>
      </div>
      <div class="locations">
        <div class="origin">
          <div class="icon">
            <i class="fas fa-location-arrow"></i>
          </div>   
          <div class="text">
            <p><?php if(isset($_SESSION["origin"])) { echo $_SESSION["origin"]; } ?></p>
          </div>
        </div>
        <div class="destination">
          <div class="icon">
            <i class="fas fa-map-marker-alt"></i>
          </div>   
          <div class="text">
            <p><?php if(isset($_SESSION["destination"])) { echo $_SESSION["destination"]; } ?></p>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="rate">
      <div class="input">
        <div class="icon">
          <i class="fas fa-comment"></i>
        </div>
        <div class="comment-input">
          <input type="text" id="comment" name="comment" required/>
          <label>Comment</label>
        </div>
      </div>
      <button id="done" name="done" value="done">Done</button>
    </div>
  </div>
</div>