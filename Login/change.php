<?php
include ("../config.php");
session_start();
$userName = $_SESSION["username"];
$x=0;
if(isset($_POST['submit']))
{
$oldPassword=$_POST['oldPassword']; 
$newPassword=$_POST['newPassword'];
$pass;
$sql = "SELECT * FROM users WHERE userName = '$userName'";
$result = mysql_query($sql);
if (mysql_num_rows($result) !== 0){  
while ($row = mysql_fetch_assoc($result)) {
$pass = $row['password'];
$userName = $row['userName'];
}
}
if($oldPassword===$pass){ 
$sql="UPDATE users SET password='$newPassword' where userName= '$userName'";
$result = mysql_query($sql);
$x=2;
} 
else
{
$x=1;
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Duke Careers | Change</title>
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
    <h2 class="title">Change Password</h2>
     <?php if($x==2){ ?>
    <span style="color:red;">Password Changed</span>
    <?php } ?>
    <form action="<?php echo $change ?>" method="post" role="form">
      <div class="login-form col-md-4 col-xs-12 no-pad">
        <div class="label-txt">Old Password : <br>
         <?php if($x==1){ ?>
    <span style="color:red;">Incorrect Password</span>
    <?php } ?>
          <input type="password" class="form-control" name="oldPassword">
        </div>
        <div class="label-txt">Password : <br>
          <input type="password" class="form-control" name="newPassword">
        </div>
        <div class="label-txt">Confirm Password : <br>
          <input type="password" class="form-control" name="confirmNewPassword">
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