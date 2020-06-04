<?php
ob_start();
include('connect.php');
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>SDEV325 - Registration</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!--<link rel="stylesheet" href="css/bootstrap-theme.min.css">-->
  <link rel="stylesheet" href="css/main.css">
  
  <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body>
  <div class="container">
    <h1>SDEV325 Registration</h1>
    <form method="post" action="register.php">
      <?php include('errors.php') ?>
      <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" name="email" placeholder="example@student.umuc.edu">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Enter new password">
      </div>
      <div class="form-group">
        <label for="password_confirm">Confirm passsword</label>
        <input type="password" class="form-control" name="password_confirm" placeholder="Confirm new password">
      </div>
      <button type="submit" class="btn btn-primary" name="register">Sign up</button>
      <p>
        Already have an account? <a href="login.php">Sign in</a>
      </p>
    </form>
  </div>
</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

<script src="js/vendor/bootstrap.min.js"></script>

<script src="js/main.js"></script>
</body>
</html>
