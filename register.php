<?php
/* 
* Page: Landing Page
*/
include('authentication.php');

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
        <!--login form-->
        <form action="register.php" method="POST">
         <!--errors-->
         <?php include('errors.php'); ?>
         <!--first name input-->
         <div class="input">
            <!--icon-->
            <div class="icon">
              <i class="far fa-user"></i>
            </div>
            <!--first name-->
            <div class="text">
              <input type="text" id="firstname" name="firstname" value="" required/>
              <label>First name</label>
            </div>
          </div>
         <!--last name input-->
         <div class="input">
            <!--icon-->
            <div class="icon">
              <i class="far fa-user"></i>
            </div>
            <!--last name-->
            <div class="text">
              <input type="text" id="lastname" name="lastname" value="" required/>
              <label>Last name</label>
            </div>
          </div>
         <!--email input-->
         <div class="input">
            <!--icon-->
            <div class="icon">
              <i class="far fa-user"></i>
            </div>
            <!--email-->
            <div class="text">
              <input type="text" id="email" name="email" value="" required/>
              <label>Email</label>
            </div>
          </div>
          <!--password input-->
          <div class="input">
            <!--icon-->
            <div class="icon">
              <i class="fas fa-lock"></i>
            </div>
            <!--password-->
            <div class="password">
              <input type="password" id="password_1" name="password_1" value="" required/>
              <label>Password</label>
            </div>
          </div>
          <!--confirm password input-->
          <div class="input">
            <!--icon-->
            <div class="icon">
              <i class="fas fa-lock"></i>
            </div>
            <!--confirm password-->
            <div class="password">
              <input type="password" id="password_2" name="password_2" value="" required/>
              <label>Confirm password</label>
            </div>
          </div>
          <div class="terms">
            <p>I have read and agree to <a href="#">Terms and Conditions</a></p>
            <input type="checkbox" name="termsandconditions" id="termsandconditions"/>
          </div>
          <button type="submit" class="btn" name="register">register</button>
          <p>Already a member? <a href="http://zoomv2-0-seanbuchanan1995351517.codeanyapp.com/index.php">Sign in</a></p>       
        </form>
      </div>
    </div>
  </section>

  <script src="js/jquery-3.4.1.min.js"></script>
  
</body>

</html>