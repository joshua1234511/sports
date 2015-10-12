<?php 
    include_once('../Configuration/dpFunctions.php'); 
    require_once ('../Configuration/links.php');
    $funObj = new dbFunction();  
    if(isset($_POST['login'])){  
        $email = $_POST['email'];  
        $password = $_POST['password'];  
        $login = $funObj->login($email, $password);  
        if ($login) {   
         if(($_SESSION['user']==='Admin')||($_SESSION['user']==='Editor')){
          header('location:'.$admin);
         }
         else{
           header('location:'.$site);
         }
        }
        else {  
          $x=1;
              
        }  
    }  
    if(isset($_POST['forgotPassword'])){ 
    $email = $_POST['email'];
    $emailVerify = $funObj->isEmailExist($email);
    if($emailVerify){  
      $x=3;
    }
    else
      $x=2;
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
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" role="form">
      <div class="login-form col-md-4 col-xs-12 no-pad">
      <?php if($x==2){ ?>
              <span style="color:red;">Invalid Email</span>
              <?php } 
            else if($x==3){ ?>
              <span style="color:red;">Password reset link sent to email</span>
              <?php } ?>
        <div class="label-txt">Username/Email : <br>
          <input type="text" class="form-control" name="email" required>
        </div>
        <div class="label-txt">Password : <br>
          <input type="password" class="form-control" name="password">
        </div>
        <div class="login-btn">
          <input class="btn reg-btn" type="submit" value="Login" name="login">
           <input class="btn forgot-btn" type="submit" value="Forgot Password" name="forgotPassword">
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