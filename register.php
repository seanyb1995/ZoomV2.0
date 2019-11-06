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
          <input type="text" id="username" name="username" placeholder="username" value=""/> 
          <input type="text" id="email" name="email" placeholder="email" value=""/>
          <input type="password" id="password_1" name="password_1" placeholder="password" value=""/>
          <input type="password" id="password_2" name="password_2" placeholder="confirm password"/>
          <input type="checkbox" name="termsandconditions" id="termsandconditions"/>
          <button type="submit" class="btn" name="register">register</button>
        </form>
      </div>
    </div>
  </section>

  <script src="js/jquery-3.4.1.min.js"></script>
  
</body>

</html>