<?php
ob_start();
include("connect.php");

if (!isset($_SESSION['email'])) {
  header('location: login.php');
}

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
      <div class="content-border col-10 offset-1 col-sm-8 offset-sm-2 col-md-6 offset-md-3">
        <?php if (isset($_SESSION['success'])) : ?>
          <div class="alert alert-success">
            <?php
            echo $_SESSION['success'];
            ?>
          </div>
        <?php endif ?>

        <?php if (isset($_SESSION['email'])) : ?>
          <p>Welcome <?php echo $_SESSION['email']; ?></p>
          <a href="logout.php">
          <button type="button" class="btn btn-danger" name="logout">Logout</button>
          </a>
        <?php endif ?>
      </div>
    </div>
  </div>
</body>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>