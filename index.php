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
          <input type="text" id="username" name="username" placeholder="username" value=""/> 
          <input type="password" id="password" name="password" placeholder="password" value=""/>
          <button type="submit" class="btn" name="login">login</button>
          <p>Don't have an account? <a href="http://zoomv2-0-seanbuchanan1995351517.codeanyapp.com/register.php">Sign Up Now</a></p>
        </form>
      </div>
    </div>
  </section>

  <script src="js/jquery-3.4.1.min.js"></script>
  
</body>

</html>