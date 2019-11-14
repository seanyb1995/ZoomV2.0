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
              <i class="far fa-envelope"></i>
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
            <!--icon-->
            <div class="icon">
              <i id="hide-password" class="fas fa-eye-slash"></i>
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
          <!--terms and conditions-->
          <div class="terms">
            <p>I have read and agree to the <a href="#">Terms and Conditions</a></p>
            <!--terms and conditions checkbox-->
            <label class="toggleButton">
              <input type="checkbox" name="termsandconditions" id="termsandconditions">
                <div>
                    <svg viewBox="0 0 44 44">
                        <path d="M14,24 L21,31 L39.7428882,11.5937758 C35.2809627,6.53125861 30.0333333,4 24,4 C12.95,4 4,12.95 4,24 C4,35.05 12.95,44 24,44 C35.05,44 44,35.05 44,24 C44,19.3 42.5809627,15.1645919 39.7428882,11.5937758" transform="translate(-2.000000, -2.000000)"></path>
                    </svg>
                </div>
              </input>
            </label>
          </div>
          <button type="submit" class="register" name="register">Register</button>
          <!--secondary navigation-->
          <div class="secondary-nav">
            <p>Already a member? <a href="login.php">Sign in</a></p>       
          </div>
        </form>
      </div>
    </div>
  </section>

  <!--scripts-->
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/reveal-password.js"></script>
  
</body>

</html>