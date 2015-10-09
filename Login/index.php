<?php
include ("../config.php");
if(isset($_POST['login']))
{
session_start();
$userName=$_POST['userName'];
$pass;
$sql = "SELECT * FROM users WHERE userName = '$userName' OR email = '$userName'";
$result = mysql_query($sql);
if (mysql_num_rows($result) !== 0){  
while ($row = mysql_fetch_assoc($result)) {
$pass = $row['password'];
$userName = $row['userName'];
}
}
$password=$_POST['password'];
if($password===$pass){ 
$_SESSION["username"] = $userName;
$x=0;
header('Location: '.$site); 
}
else{
$x1=1;
}
}
else if(isset($_POST['loginAdmin']))
{
session_start();
$userName=$_POST['userName'];
$pass;
$sql = "SELECT * FROM users WHERE userName = '$userName'";
$result = mysql_query($sql);
if (mysql_num_rows($result) !== 0){  
while ($row = mysql_fetch_assoc($result)) {
$pass = $row['password'];
$userName = $row['userName'];
}
}
$password=$_POST['password'];
if($password===$pass){ 
$_SESSION["username"] = $userName;
$x=0;
header('Location: '.$change); 
}
else{
$x=1;
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Duke Careers | Login</title>
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
</div>
<!-- header ends-->
<!-- content wrap-->
<div class="row content-wrap">
  <div class="main-wrapper content">
    <h2 class="title">Sign In</h2>
    <?php if($x==1){ ?>
    <span style="color:red;">Incorrect Username Or Password</span>
    <?php } ?>
    <form action="<?php echo $login ?>" method="post" role="form">
      <div class="login-form col-md-4 col-xs-12 no-pad">
        <div class="label-txt">Username : <br>
          <input type="text" class="form-control" id="userName" name="userName">
        </div>
        <div class="label-txt">Password : <br>
          <input type="password" class="form-control" id="password" name="password">
          <input type="hidden" value="admin" name="admin"/> 
        </div>
        <?php if(!isset($_POST['admin'])) { ?>
        <div class="login-btn">
          <input class="btn reg-btn" type="submit" value="Login" id="login" name="login">
          <a class="btn forgot-btn" href="<?php echo $forgot ?>">Forgot Password</a>
        </div>
        <?php } else { ?>
         <div class="login-btn">
          <input class="btn reg-btn" type="submit" value="Login" id="loginAdmin" name="loginAdmin">
        </div>
        <?php } ?>
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