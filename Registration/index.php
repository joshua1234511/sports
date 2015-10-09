<!DOCTYPE html>
<?php include ("../config.php"); ?>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Duke Careers | Registration Form</title>
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
<style type="text/css">
    /* show the move cursor as the user moves the mouse over the panel header.*/
    #draggablePanelList .panel-heading {
        cursor: move;
    }
</style>
</head>

<body>
<!-- Main container-->
<div class="container-fluid">
<div class="row main-head">
<!-- header-->
  <?php include ("../Header/index.php"); ?>
</div>
<!-- header ends-->
<!-- content wrap -->
<div class="row content-wrap">
  <div class="main-wrapper content">
  <h2>User Registration</h2>
   </div>
    <div class="col-md-6 no-pad text-cent">
      <form role="form" class="form_reg">
        <div class="col-md-12 no-pad margin-bottom-20">
          <div class="col-md-6 no-pad-left">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Name">
              <input type="text" class="form-control" placeholder="Email">
              <select class="form-control option">
                <option value="">State/Prov</option>
                <option value="2">Alabama</option>
                <option value="3">Alaska</option>
                <option value="55">American Samoa</option>
                <option value="4">Arizona</option>
                <option value="5">Arkansas</option>
                <option value="6">California</option>
                <option value="7">Colorado</option>
                <option value="8">Connecticut</option>
                <option value="9">Delaware</option>
                <option value="52">District of Columbia</option>
                <option value="58">Federated States of Micronesia</option>
                <option value="10">Florida</option>
                <option value="11">Georgia</option>
                <option value="56">Guam</option>
                <option value="12">Hawaii</option>
                <option value="13">Idaho</option>
                <option value="14">Illinois</option>
                <option value="15">Indiana</option>
                <option value="16">Iowa</option>
                <option value="17">Kansas</option>
                <option value="18">Kentucky</option>
                <option value="19">Louisiana</option>
                <option value="20">Maine</option>
                <option value="60">Marshall Islands</option>
                <option value="21">Maryland</option>
                <option value="22">Massachusetts</option>
                <option value="23">Michigan</option>
                <option value="24">Minnesota</option>
                <option value="25">Mississippi</option>
                <option value="26">Missouri</option>
                <option value="27">Montana</option>
                <option value="28">Nebraska</option>
                <option value="29">Nevada</option>
                <option value="30">New Hampshire</option>
                <option value="31">New Jersey</option>
                <option value="32">New Mexico</option>
                <option value="33">New York</option>
                <option value="34">North Carolina</option>
                <option value="35">North Dakota</option>
                <option value="59">Northern Mariana Islands</option>
                <option value="36">Ohio</option>
                <option value="37">Oklahoma</option>
                <option value="38">Oregon</option>
                <option value="1">Outside USA</option>
                <option value="57">Palau</option>
                <option value="39">Pennsylvania</option>
                <option value="53">Puerto Rico</option>
                <option value="40">Rhode Island</option>
                <option value="41">South Carolina</option>
                <option value="42">South Dakota</option>
                <option value="43">Tennessee</option>
                <option value="44">Texas</option>
                <option value="45">Utah</option>
                <option value="46">Vermont</option>
                <option value="54">Virgin Islands</option>
                <option value="47">Virginia</option>
                <option value="48">Washington</option>
                <option value="49">West Virginia</option>
                <option value="50">Wisconsin</option>
                <option value="51">Wyoming</option>
              </select>
               <input type="text" class="form-control" placeholder="Phone">
              <input type="text" class="form-control" placeholder="City">
              <input type="text" class="form-control" placeholder="Postal">
            </div>
          </div>
        </div>
        <div class="col-md-12 pad_top_bot">
        <button type="submit" class="btn reg-btn">SIGNUP</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- content wrap ends-->
<!-- footer wrap -->
 <?php include ("../Footer/index.php"); ?>
<!-- footer wrap ends -->
</div>

    <script src="../js/jquery.event.move.js"></script>
    <script src="../js/responsive-slider.js"></script>
    <!-- Assumes that JQuery is already included somewhere. Size: 22kb or 13kb minified. -->
<script src="../js/jquery-ui-1.10.4.js"></script>
<script src="../js/jquery.ui.touch-punch.js"></script>


<script type="text/javascript">


    jQuery(function($) {
        var panelList = $('#draggablePanelList');
        panelList.sortable({
            // Only make the .panel-heading child elements support dragging.
            // Omit this to make the entire <li>...</li> draggable.
            handle: '.panel-heading', 
            update: function() {
                $('.panel', panelList).each(function(index, elem) {
                     var $listItem = $(elem),
                         newIndex = $listItem.index();

                     // Persist the new indices.
                });
            }
        });
    });
</script>
<script src="../js/bootstrap-filestyle.min.js" type="text/javascript"></script>

</body>
</html>