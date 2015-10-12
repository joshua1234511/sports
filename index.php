<!DOCTYPE html>
<?php include ("Configuration/config.php");
include ("Configuration/links.php");
?>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Duke Careers | Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<!-- Latest compiled CSS -->
<link rel="stylesheet" href="css/bootstrap.css">
<!-- Latest compiled and minified JavaScript -->
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script> 
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script> 
<!-- Custom CSS -->
<link rel="stylesheet" href="css/style.css">
<link href="css/responsive-slider-parallax.css" rel="stylesheet">
<link href="css/hover.css" rel="stylesheet">
<link rel="stylesheet" href="css/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
</head>
</head>
<body>
<!-- Main container-->
<div class="container-fluid">
<!-- header-->
<?php include ("Header/index.php"); ?>
<!-- header ends-->
<div class="row slider">

    <!--<img src="images/Banner1.jpg" width="100%" height="434">-->
    <!-- Responsive slider - START -->
    <div class="main-wrapper content">
    <div class="theme-default">
<div id="slider" class="nivoSlider"> <img src="images/slide1.jpg" data-thumb="images/toystory.jpg" alt="" /> <a href="http://dev7studios.com"><img src="images/slide2.jpg" data-thumb="images/up.jpg" alt="" title="This is an example of a caption" /></a> <img src="images/slide3.jpg" data-thumb="images/walle.jpg" alt="" data-transition="slideInLeft" /> <img src="images/slide4.jpg" data-thumb="demo/images/nemo.jpg" alt="" title="#htmlcaption" /> </div>
</div></div>
      <!-- Responsive slider - END -->
</div>
<!-- search wrap -->
<div class="row search">
  <div class="main-wrapper">
<!--    <div class="input-group input-group-lg">
      <span class="input-group-addon glyphicon glyphicon-search"></span>
       <input type="text" class="form-control" placeholder="Type Here...">
       
       <span class="input-group-btn">
        <button class="btn btn-success" type="button">Search</button>
       </span>
    </div>-->
    <div class="search-block">
    <div class="search-icon"></div>
    <div class="search-title form-control no-border no-pad" >Search : </div>
    <div class="search-wrap"><input type="text" class="form-control no-border no-pad search-bar" placeholder="Events" /></div>
    <div class="btn-dwn pull-right"><button class="btn form-control search-btn" type="button" >SEARCH</button></div>
    <div class="clearfix"></div>
    </div>
  </div>
  <div class="clearfix"></div>
</div>
<!-- search wrap ends -->
<!-- content wrap -->
<div class="row content-wrap">
  <div class="main-wrapper content">
  <h2 class="main-title">Featured Events</h2>
    <div class="col-md-3 txt-block no-pad-left content-shadow">
     <h2><a href="<?php echo $eventDetail ?>">Event 1</a></h2>
     <a href="#"><img src="<?php echo $images ?>slide-1.jpg" width="170" height="100" alt="Logo" /></a>
        <div class="event-detail">
            <p>At verna Goa</p>
            <h5>Date: 20 July 2014</h5>
        </div>
    </div>
    <div class="col-md-3 txt-block content-shadow">
     <h2><a href="<?php echo $eventDetail ?>">Event 2</a></h2>
    <a href="#"><img src="images/slide-1.jpg" width="170" height="100" alt="Logo" /></a>
    <div class="event-detail">
            <p>At verna Goa</p>
            <h5>Date: 20 July 2014</h5>
        </div>
    </div>
    <div class="col-md-3 txt-block content-shadow">
     <h2><a href="<?php echo $eventDetail ?>">Event 3</a></h2>
     <a href="#"><img src="images/slide-1.jpg" width="170" height="100" alt="Logo" /></a>
     <div class="event-detail">
            <p>At verna Goa</p>
            <h5>Date: 20 July 2014</h5>
        </div>
    </div>
    <div class="col-md-3 txt-block no-pad-right">
     <h2><a href="<?php echo $eventDetail ?>">Event 4</a></h2>
     <a href="#"><img src="images/slide-1.jpg" width="170" height="100" alt="Logo" /></a>
     <div class="event-detail">
            <p>At verna Goa</p>
            <h5>Date: 20 July 2014</h5>
        </div>
    </div>
 
    <div class="clearfix"></div>
  </div>
</div>
<!-- content wrap ends-->
<!-- content wrap -->
<div class="row content-wrap  popular-event">
  <div class="main-wrapper content event-hr">
  <h2>Most Popular Events</h2>
    <div class="col-md-3 txt-block no-pad-left content-shadow">
     <h2><a href="event_details.html">Event 1</a></h2>
     <a href="#"><img src="images/slide-1.jpg" width="170" height="100" alt="Logo" /></a>
     <div class="event-detail">
            <p>At verna Goa</p>
            <h5>Date: 20 July 2014</h5>
        </div>
    </div>
    <div class="col-md-3 txt-block content-shadow">
     <h2><a href="event_details.html">Event 2</a></h2>
     <a href="#"><img src="images/slide-1.jpg" width="170" height="100" alt="Logo" /></a>
     <div class="event-detail">
            <p>At verna Goa</p>
            <h5>Date: 20 July 2014</h5>
        </div>
    </div>
    <div class="col-md-3 txt-block content-shadow">
     <h2><a href="event_details.html">Event 3</a></h2>
     <a href="#"><img src="images/slide-1.jpg" width="170" height="100" alt="Logo" /></a>
     <div class="event-detail">
            <p>At verna Goa</p>
            <h5>Date: 20 July 2014</h5>
        </div>
    </div>
    <div class="col-md-3 txt-block no-pad-right">
     <h2><a href="event_details.html">Event 4</a></h2>
     <a href="#"><img src="images/slide-1.jpg" width="170" height="100" alt="Logo" /></a>
     <div class="event-detail">
            <p>At verna Goa</p>
            <h5>Date: 20 July 2014</h5>
        </div>
    </div>
    <div class="clearfix"></div>
  </div>
</div>
<!-- content wrap ends-->
<!-- footer wrap -->
<?php include ("Footer/index.php"); ?>
<!-- footer wrap ends -->
</div>



</body>
</html>