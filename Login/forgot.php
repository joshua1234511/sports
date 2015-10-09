<?php
include ("../config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Duke Careers | Forgot Password</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<!-- Latest compiled CSS -->
<link rel="stylesheet" href="../css/bootstrap.css">
<!-- Latest compiled and minified JavaScript -->
<script src="../js/jquery-1.10.2.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/bootstrap.min.js"></script>

<!-- Custom CSS -->
<link rel="stylesheet" href="../css/style.css">
<link href="../css/responsive-slider-parallax.css" rel="stylesheet">
<link href="../css/hover.css" rel="stylesheet">
</head>

<body>
<!-- Main container-->
<div class="container-fluid">
<!-- header-->
<?php include ("../Header/index.php"); ?>
<!-- header ends-->
<!-- content wrap-->
<div class="row content-wrap">
  <div class="main-wrapper content">
    <h2 class="title">Forgot Password</h2>
    <form action="<?php echo $forgot ?>" method="post" role="form">
      <div class="login-form col-md-4 col-xs-12 no-pad">
        <div class="label-txt">Email or Username : <br>
          <input type="email" class="form-control" name="email">
        </div>
        <div class="login-btn">
          <input class="btn reg-btn" type="submit" value="Submit" name="submit">
        </div>
      </div> 
    </form> 
  </div>
</div>
<!-- content wrap ends-->
<!-- footer wrap -->
<?php include ("../Footer/index.php"); ?>
<!-- footer wrap ends -->
</div>
    <script src="../js/jquery.event.move.js"></script>
    <script src="../js/responsive-slider.js"></script>


</body>
</html>