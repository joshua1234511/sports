<!DOCTYPE html>
<?php include ("../config.php"); ?>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Duke Careers | Open Engagements</title>
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
<div id="email-pop-up">Content of popup</div>
<!-- Main container-->
<div class="container-fluid">
<!-- header-->
<?php include ("../Header/index.php"); ?>
<!-- header ends-->

<!-- content wrap-->
<div class="row content-wrap">
  <div class="main-wrapper content">
  <div class="search-block">
    <div class="search-icon"></div>
    <div class="search-title form-control no-border no-pad" >Search : </div>
    <div class="search-wrap"><input type="text" class="form-control no-border no-pad search-bar" placeholder="Events" /></div>
    <div class="btn-dwn pull-right"><button class="btn form-control search-btn" type="button" >SEARCH</button></div>
    <div class="clearfix"></div>
    </div>
    <div class="col-md-12">
      <h2 class="search-title title"> <span class="job-count">Events 1 to 6</span>All Events</h2>
    </div>
    <div class="col-md-12 no-pad">
      <div class="event-wrap pad-left-22">
        <div class="search-result">
          <div class="job-wrap">
            <h4><a href="<?php echo $eventDetail ?>">Event 1</a></h4>
            <div class="all-events-img col-md-3"><img src="<?php echo $images ?>slide-1.jpg" width="170" height="100" alt="Logo" /></div>
            <div class="sub-title-wrap">
              <span>Crittercism, Inc. - Los Angeles, CA</span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magn aliqua.
               Ut enim ad minim veniam, quis nostrud exercitation ullamco..</p>
              <div class="clearfix"></div>  
              </div>
               
            </div>
          </div>
          <div class="ad-1">
          </div>
          <div class="job-wrap">
            <h4><a href="<?php echo $eventDetail ?>">Event 2</a></h4>
            <div class="all-events-img col-md-3"><img src="<?php echo $images ?>slide-1.jpg" width="170" height="100" alt="Logo" /></div>
            <div class="sub-title-wrap">
              <span>Crittercism, Inc. - Los Angeles, CA</span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magn aliqua.
               Ut enim ad minim veniam, quis nostrud exercitation ullamco..</p>
              <div class="clearfix"></div>
            </div>
            
          </div>
          <div class="job-wrap">
            <h4><a href="<?php echo $eventDetail ?>">Event 3</a></h4>
            <div class="all-events-img col-md-3"><img src="<?php echo $images ?>slide-1.jpg" width="170" height="100" alt="Logo" /></div>
            <div class="sub-title-wrap">
              <span>Crittercism, Inc. - Los Angeles, CA</span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magn aliqua.
               Ut enim ad minim veniam, quis nostrud exercitation ullamco..</p>
              <div class="clearfix"></div>
            </div>
            
          </div>
          <div class="job-wrap">
            <h4><a href="<?php echo $eventDetail ?>">Event 4</a></h4>
            <div class="all-events-img col-md-3"><img src="<?php echo $images ?>slide-1.jpg" width="170" height="100" alt="Logo" /></div>
            <div class="sub-title-wrap">
              <span>Crittercism, Inc. - Los Angeles, CA</span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magn aliqua.
               Ut enim ad minim veniam, quis nostrud exercitation ullamco..</p> 
              <div class="clearfix"></div>
            </div>
            
          </div>
          <div class="job-wrap">
            <h4><a href="<?php echo $eventDetail ?>">Event 5</a></h4>
            <div class="all-events-img col-md-3"><img src="<?php echo $images ?>slide-1.jpg" width="170" height="100" alt="Logo" /></div>
            <div class="sub-title-wrap">
              <span>Crittercism, Inc. - Los Angeles, CA</span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magn aliqua.
               Ut enim ad minim veniam, quis nostrud exercitation ullamco..</p>
              <div class="clearfix"></div>
            </div>
            
          </div>
          <div class="job-wrap">
            <h4><a href="<?php echo $eventDetail ?>">Event 6</a></h4>
            <div class="all-events-img col-md-3"><img src="<?php echo $images ?>slide-1.jpg" width="170" height="100" alt="Logo" /></div>
            <div class="sub-title-wrap">
              <span>Crittercism, Inc. - Los Angeles, CA</span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magn aliqua.
               Ut enim ad minim veniam, quis nostrud exercitation ullamco..</p> 
              <div class="clearfix"></div>
            </div>
            
          </div>
          <div class="pag">
              <a href="" class="prev">&lt;</a>
              <a href="">1</a>
              <a href="">2</a>
              <a href="">3</a></li>
              <a href="" class="active">4</a>
              <a href="">5</a>
              <a class="no-box">...</a>
              <a href="">10</a>
              <a href="">20</a>
              <a href="">30</a>
              <a href="" class="nxt">&gt;</a>
              <div class="clearfix"></div>
          </div>
        </div>
        
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
</div>
<!-- content wrap ends-->
<!-- footer wrap -->
<?php include ("../Footer/index.php"); ?>
<!-- footer wrap ends -->
</div>
    <script src="../js/jquery.event.move.js"></script>
    <script src="../js/responsive-slider.js"></script>
<script src="../js/jquery.bpopup.min.js" type="text/javascript"></script>
<script type="text/javascript">
      ;(function($) {

         // DOM Ready
        $(function() {

            // Binding a click event
            // From jQuery v.1.7.0 use .on() instead of .bind()
            $('#email-btn').bind('click', function(e) {

                // Prevents the default action to be triggered. 
                e.preventDefault();

                // Triggering bPopup when click event is fired
                $('#email-pop-up').bPopup({
                  contentContainer:'.content',
                  loadUrl: '<?php echo $site ?>' //Uses jQuery.load()
                });

            });

        });

    })(jQuery);
</script>
</body>
</html>