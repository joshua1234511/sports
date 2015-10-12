<!DOCTYPE html>
<?php 
include_once('../Configuration/dpFunctions.php'); 
require_once ('../Configuration/links.php');
session_start(); 
if(!$_SESSION['user'])
{
  header('location:'.$site);
}
$funObj = new dbFunction(); 

?>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Duke Careers | Categories</title>
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
  <h2>Categories</h2>
   </div>
    <div class="col-md-3 no-pad text-cent">
     
        <div class="col-md-12 pad_top_bot">
        <?php
        $array = $funObj->isCategoriesExist(0);
        if($array){
          ?>
          <table>
          <?php
          foreach ($array as $key => $value) {
            ?>
            <tr>
            <td><?php echo $value['name'] ?></td>
            </tr> 
            <?php
            function categories(){
            foreach ($funObj->isCategoriesExist($value['id'])as $key => $value) {
            ?>
            <tr>
            <td><?php echo $value['name'] ?></td>
            </tr> 
            <?php
            categories();
            }
          }
          }
            ?>
            </table>
            <?php
             
            }
          
        else{
        ?>
        </div>
        <div class="col-md-3 pad_top_bot"> 
        <form role="form" class="form_reg" action="" method="post">
           <input type="text" class="form-control"  name="category" id="category" required  >
           <button type="submit" class="btn reg-btn" name="add">Add</button>
        </form>
        <?php
        }
        ?>
        </div>
     
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
<script>
// This example displays an address form, using the autocomplete feature
// of the Google Places API to help users fill in the information.

var placeSearch, autocomplete;
var componentForm = {
  locality: 'long_name',
  administrative_area_level_1: 'short_name',
  country: 'long_name',
  postal_code: 'short_name'
};

function initAutocomplete() {
  // Create the autocomplete object, restricting the search to geographical
  // location types.
  autocomplete = new google.maps.places.Autocomplete(
      /** @type {!HTMLInputElement} */(document.getElementById('country')),
      {types: ['geocode']});

  // When the user selects an address from the dropdown, populate the address
  // fields in the form.
  autocomplete.addListener('place_changed', fillInAddress);
}

// [START region_fillform]
function fillInAddress() {
  // Get the place details from the autocomplete object.
  var place = autocomplete.getPlace();

  for (var component in componentForm) {
    document.getElementById(component).value = '';
    document.getElementById(component).disabled = false;
  }

  // Get each component of the address from the place details
  // and fill the corresponding field on the form.
  for (var i = 0; i < place.address_components.length; i++) {
    var addressType = place.address_components[i].types[0];
    if (componentForm[addressType]) {
      var val = place.address_components[i][componentForm[addressType]];
      document.getElementById(addressType).value = val;
    }
  }
}
// [END region_fillform]

// [START region_geolocation]
// Bias the autocomplete object to the user's geographical location,
// as supplied by the browser's 'navigator.geolocation' object.
function geolocate() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var geolocation = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };
      var circle = new google.maps.Circle({
        center: geolocation,
        radius: position.coords.accuracy
      });
      autocomplete.setBounds(circle.getBounds());
    });
  }
}
// [END region_geolocation]

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?signed_in=true&libraries=places&callback=initAutocomplete"
        async defer></script>
</body>
</html>