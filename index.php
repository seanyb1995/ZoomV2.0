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
        <form action="index.php" method="POST">
         <!--errors-->
         <?php include('errors.php'); ?>
          <!--username input-->
          <div class="input">
            <!--icon-->
            <div class="icon">
              <i class="far fa-user"></i>
            </div>
            <!--username-->
            <div class="text">
              <input type="text" id="username" name="username" value="" required/>
              <label>Username</label>
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
              <input type="password" id="password" name="password" value="" required/>
              <label>Password</label>
            </div>
          </div>
          <button type="submit" class="login" name="login">Login</button>
          <p>Don't have an account? <a href="http://zoomv2-0-seanbuchanan1995351517.codeanyapp.com/register.php">Sign Up Now</a></p>
        </form>
      </div>
    </div>
  </section>

  <script src="js/jquery-3.4.1.min.js"></script>
  
</body>

</html>