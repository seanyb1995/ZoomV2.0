<?php
/* 
* Page: Landing Page
*/
include('authentication.php');
include('config.php');

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
        <form action="forgot-password.php" method="POST">
         <!--errors-->
         <?php include('errors.php'); ?>
          <!--username input-->
          <div class="input">
            <!--icon-->
            <div class="icon">
              <i class="far fa-envelope"></i>
            </div>
            <!--username-->
            <div class="text">
              <input type="text" id="email" name="email" value="<?php if(isset($_COOKIE["member_login"])) { echo $_COOKIE["member_login"]; } ?>" required/>
              <label>Email</label>
            </div>
          </div>
          <p>
          <?php
            if(isset($_SESSION["recovered_password"])) { 
              
            echo 'Password: ' . $_SESSION["recovered_password"]; 
            unset($_SESSION["recovered_password"]);
              
            } 
          ?>
          </p>
          <button type="submit" class="forgotpassword" name="forgotpassword">Find</button>
          <!--secondary navigation-->
          <div class="secondary-nav">
          <p>Already a member? <a href="http://zoomv2-0-seanbuchanan1995351517.codeanyapp.com/login.php">Sign in</a></p>                 
            <p>Don't have an account? <a href="http://zoomv2-0-seanbuchanan1995351517.codeanyapp.com/register.php">Sign up now</a></p>
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