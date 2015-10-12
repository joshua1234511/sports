<?php include ("../Configuration/config.php");
include ("../Configuration/links.php");
?>
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
    <div class="col-md-12 no-pad">
      <div class="col-md-6 no-pad">
          <div class="event-detail-img"><a href="#"><img src="<?php echo $images ?>slide-1.jpg" width="450" height="350" alt="Logo" /></a></div>
          <div class="event-detail-imag"><img src="<?php echo $images ?>slide-1.jpg" width="140" height="80" alt="Logo" /></div>
          <div class="event-detail-imag"><img src="<?php echo $images ?>slide-1.jpg" width="140" height="80" alt="Logo" /></div>
          <div class="event-detail-imag"><img src="<?php echo $images ?>slide-1.jpg" width="140" height="80" alt="Logo" /></div>
       </div>
      
      <div class="col-md-6 no-pad">
      <h1>Title</h1>
      <h5 class="event-detail-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</h5>
          <div class="event-detail-icons">
          <ul class="list-inline">
          <li><a class="facebook-icon icon col-md-2" href="#">Facebook</a></li>
          <li><a class="twitter-icon icon col-md-2" href="#">Twitter</a></li>
          <li><a class="linkedin-icon icon col-md-2" href="#">linkedin</a></li>
          </ul>
          </div>
      </div>
      </div>
      <div class="col-md-12 no-pad">
      <div class="col-md-6 no-pad">
      <h5>Add a comment</h5>
       <textarea rows="4" cols="61"></textarea>
       <button type="submit" class="btn reg-btn">COMMENT</button>
       <strong></strong>
       <div class="col-md-12 no-pad">
            <div class="col-md-2">
            <a href="#"><img src="<?php echo $images ?>slide-1.jpg" width="50" height="40" alt="Logo" /></a>
            </div>
            <div class="col-md-10">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br> 
            <a href="#">reply</a>
            </div>
        </div>
        
        <div class="col-md-12 no-pad user-comment">
            <div class="col-md-2">
            <a href="#"><img src="<?php echo $images ?>slide-1.jpg" width="50" height="40" alt="Logo" /></a>
            </div>
            <div class="col-md-10">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br> 
            <a href="#">reply</a>
            </div>
        </div>
        
        <div class="col-md-12 no-pad">
            <div class="col-md-2">
            <a href="#"><img src="<?php echo $images ?>slide-1.jpg" width="50" height="40" alt="Logo" /></a>
            </div>
            <div class="col-md-10">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br> 
            <a href="#">reply</a>
            </div>
        </div>
        <div class="comment">
          <div class="col-md-8 no-pad user-comment">
        <textarea rows="3" cols="41"></textarea>
        <a href="#" class="btn-cust btn-cust-orng grow">Comment</a>
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