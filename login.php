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
        <!--logo-->
        <div class="logo">
          <!--logo icon-->
          <svg id="logo" data-name="logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 84.77 58.15">
            <title>logo</title>
            <g>
              <path d="M27.65,22.3c-.18.11-.34.3-.53.32a17.58,17.58,0,0,0-7.86,2.7A19.49,19.49,0,0,0,11,37.83a33.8,33.8,0,0,0,1.81,19.8A38.51,38.51,0,0,0,26.68,76,24.18,24.18,0,0,0,36,80.07a4.64,4.64,0,0,1,.53.16l0,.22c-1.6-.29-3.23-.47-4.81-.88-5.64-1.45-10.12-4.76-13.94-9A40.26,40.26,0,0,1,7.43,47.48c-.63-5.93.15-11.67,3.37-16.87a17.16,17.16,0,0,1,12.34-8.16,1.54,1.54,0,0,0,.35-.15Z" transform="translate(-7.23 -22.3)" fill="#c61617"/>
              <path d="M37.6,68.28c4.36-.86,6.55-3.68,7.71-7.54H66.09c-.38.17-.58.29-.79.37a34.93,34.93,0,0,1-8.63,2.35c-.47,0-.63.25-.76.68a41.58,41.58,0,0,1-1.79,5.43c-3.55,7.57-11.35,10.92-19.45,8.51a27.46,27.46,0,0,1-12.82-8.54,38.89,38.89,0,0,1-9.76-22.05A24.59,24.59,0,0,1,14.4,33.18C18.49,25.37,26.62,22.3,35,25.36a26.45,26.45,0,0,1,10.52,7.06c1.31,1.43,2.46,3,3.74,4.44a2.42,2.42,0,0,0,1.26.69c4,.81,8,1.56,12,2.35a9.52,9.52,0,0,1,1.92.55H61c-6.76,0-13.52-.08-20.29-.09a2.59,2.59,0,0,1-2-.86,15.6,15.6,0,0,0-8.28-4.78,29.61,29.61,0,0,0-3.35-.25,8.76,8.76,0,0,1,5.69-1.71,13.53,13.53,0,0,1,8.51,3.52c1.44,1.25,3,.89,4.79,1.1a21.14,21.14,0,0,0-9.46-6.45,12.16,12.16,0,0,0-7.52-.19c-4.74,1.56-7.42,5-8.59,9.73A24.08,24.08,0,0,0,21.84,55.2,27.22,27.22,0,0,0,32.22,68.55a15.79,15.79,0,0,0,9.23,2.82c4.43-.09,9.24-3.58,10.41-7.67a15.7,15.7,0,0,0-2.3.14c-.31,0-.62.42-.82.72a9.28,9.28,0,0,1-10.51,4C38.07,68.48,37.93,68.4,37.6,68.28Z" transform="translate(-7.23 -22.3)" fill="#c61617"/>
              <path d="M92,50.48,45.9,52l-.76-3L92,50.34Z" transform="translate(-7.23 -22.3)" fill="#c61617"/>
              <path d="M41,43.45l35.91,1.48V45l-15.67.73c-5.55.26-11.1.52-16.66.81a1.18,1.18,0,0,1-1.1-.5C42.7,45.17,41.84,44.35,41,43.45Z" transform="translate(-7.23 -22.3)" fill="#c61617"/>
              <path d="M45.23,57.25,46,54.38l31,1.26v.09Z" transform="translate(-7.23 -22.3)" fill="#c61617"/>
            </g>
          </svg>
          <!--logo text-->
          <svg id="text" data-name="text" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80.65 20.62">
            <title>text</title>
            <path id="z" d="M21.64,6.25H9.43a4.17,4.17,0,0,1,3.94-2.86H27.19a3.65,3.65,0,0,1-.67,1.84L14.63,21H27.1a4.29,4.29,0,0,1-3.94,2.86h-14A3.08,3.08,0,0,1,9.87,22Z" transform="translate(-9.17 -3.39)" fill="#151515"/>
            <path id="o" d="M29.44,15.36c0-5.49,1.46-7,6.92-7h.82c5.52,0,6.92,1.61,6.92,7V17c0,5.43-1.4,7-6.92,7h-.82c-5.57,0-6.92-1.69-6.92-7Zm7.62,6c3,0,3.71-1,3.71-4.56V15.48c0-3.45-.58-4.53-3.71-4.53h-.61c-3,0-3.68,1-3.68,4.53v1.34c0,3.33.47,4.56,3.68,4.56Z" transform="translate(-9.17 -3.39)" fill="#151515"/>
            <path id="o2" d="M47.32,15.36c0-5.49,1.46-7,6.92-7h.82c5.52,0,6.92,1.61,6.92,7V17c0,5.43-1.4,7-6.92,7h-.82c-5.58,0-6.92-1.69-6.92-7Zm7.62,6c3,0,3.71-1,3.71-4.56V15.48c0-3.45-.58-4.53-3.71-4.53h-.61c-3,0-3.68,1-3.68,4.53v1.34c0,3.33.47,4.56,3.68,4.56Z" transform="translate(-9.17 -3.39)" fill="#151515"/>
            <path id="m" d="M66,11.59c0-2.13-.65-2.77-1.64-2.77V8.5h2.81c1.22,0,1.78.49,2,1.31a5.57,5.57,0,0,1,4-1.49c2,0,3.51.47,4.44,1.84a6.27,6.27,0,0,1,4.5-1.84c3.94,0,5.84,1.29,5.84,6.37v6c0,2.14.91,2.78,1.93,2.78v.32H86.69c-1.78,0-2.13-1-2.13-2.6V15c0-3-.76-4-3-4-2.57,0-3,1.64-3,4v5.75c0,2.14.91,2.78,1.9,2.78v.32H77.41c-1.79,0-2.16-1-2.16-2.6V15c0-2.95-.62-4.06-3-4.06-2.59,0-3,1.61-3,4v5.75c0,2.14.9,2.78,1.92,2.78v.32H68.09c-1.78,0-2.13-1-2.13-2.6Z" transform="translate(-9.17 -3.39)" fill="#151515"/>
          </svg>
        </div>
        <!--login form-->
        <form action="login.php" method="POST">
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
            <!--icon-->
            <div class="icon">
              <i id="hide-password" class="fas fa-eye-slash"></i>
            </div>
          </div>
          <!--support-->
          <div class="support">
            <!--remember me-->
            <div class="remember-me">
              <label class="toggleButton">
                <input type="checkbox" name="remember" id="remember" <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?>/>
                    <div>
                        <svg viewBox="0 0 44 44">
                            <path d="M14,24 L21,31 L39.7428882,11.5937758 C35.2809627,6.53125861 30.0333333,4 24,4 C12.95,4 4,12.95 4,24 C4,35.05 12.95,44 24,44 C35.05,44 44,35.05 44,24 C44,19.3 42.5809627,15.1645919 39.7428882,11.5937758" transform="translate(-2.000000, -2.000000)"></path>
                        </svg>
                    </div>
                  </input>
                </label>
              <label>Remember me</label>
            </div>
            <!--forgot password-->
            <div class="forgot-password">
              <a href="http://zoomv2-0-seanbuchanan1995351517.codeanyapp.com/forgot-password.php">Forgot password?</a>
            </div>
          </div>
          <button type="submit" class="login" name="login">Login</button>
          <!--secondary navigation-->
          <div class="secondary-nav">
            <p>Don't have an account? <a href="http://zoomv2-0-seanbuchanan1995351517.codeanyapp.com/register.php">Sign up now</a></p>
          </div>
          </form>
      </div>
    </div>
  </section>
  
  <!--scripts-->
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/reveal-password.js"></script>
  <script src="js/animations.js"></script>
  
</body>

</html>