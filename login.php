<?php
ob_start();
include('connect.php');
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>SDEV325 - Login</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">

  <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<header></header>

<body>
  <div class="container">
    <div class="row">
      <div class="content-border col-10 offset-1 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-4 offset-lg-4">
        <h1>Login</h1>
        <form method="post" action="login.php">
          <?php include('errors.php') ?>
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" name="email" placeholder="example@student.umuc.edu">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Enter password">
          </div>
          <button type="submit" class="btn btn-primary" name="login">Sign in</button>
        </form>
        <br/>
        <p>
          New to Site? <a href="register.php">Sign up today</a>
        </p>
      </div>
    </div>
  </div>
</body>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>