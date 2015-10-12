<!DOCTYPE html>
<?php 
include_once('../Configuration/dpFunctions.php'); 
require_once ('../Configuration/links.php');
$funObj = new dbFunction(); 
if(isset($_POST['register'])){  
        $x1=0;
        $name =$_POST['name'];
        $userName = $_POST['userName'];  
        $email = $_POST['email'];  
        $password = $_POST['password'];  
        $confirmPassword = $_POST['cpassword'];  
        $country = $_POST['country'];
        $state = $_POST['state'];
        $phone = $_POST['phone'];
        $city = $_POST['city'];
        $postal = $_POST['postal'];
        if($password == $confirmPassword){  
            $userNameVerify = $funObj->isUserNameExist($userName);  
            $emailVerify = $funObj->isEmailExist($email);
            if(!$userNameVerify){    
            if(!$emailVerify){  
                $register = $funObj->UserRegister($name, $userName, $email, $password, $country, $state, $phone, $city, $postal);  
                if($register){  
                     echo "<script>alert('Registration Successful')</script>";  
                }else{  
                    echo "<script>alert('Registration Not Successful')</script>";  
                }  
            } else {  
                $x=3; 
            } 
            }
             else {  
                $x=2; 
            } 
        } else {  
            $x=1;
          
        }  

    }  
?>
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
      <form role="form" class="form_reg" action="" method="post">
        <div class="col-md-12 no-pad margin-bottom-20">
          <div class="col-md-6 no-pad-left">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Name" name="name" required  <?php if($x1==0){ ?>value="<?php echo $name; ?>" <?php } ?>>
              <?php if($x==2){ ?>
              <span style="color:red;">Username Already Exist</span>
              <?php } ?>
              <input type="text" class="form-control" placeholder="Username" name="userName" required  <?php if($x1==0){ ?>value="<?php echo $userName; ?>" <?php } ?>>
              <?php if($x==3){ ?>
              <span style="color:red;">Email Already Exist</span>
              <?php } ?>
              <input type="email" class="form-control" placeholder="Email" name="email" required  <?php if($x1==0){ ?>value="<?php echo $email; ?>" <?php } ?>>
              <?php if($x==1){ ?>
              <span style="color:red;">Password Not Match</span>
              <?php } ?>
              <input type="password" class="form-control" placeholder="Password" name="password" required>
              <input type="password" class="form-control" placeholder="Confirm Password" name="cpassword" required>
              <input type="text" class="form-control" placeholder="Country" name="country" id="country" required  <?php if($x1==0){ ?>value="<?php echo $country; ?>" <?php } ?>>
              <input type="text" class="form-control" placeholder="State" name="state" id="administrative_area_level_1" required  <?php if($x1==0){ ?>value="<?php echo $state; ?>" <?php } ?>>
              <input type="number" class="form-control" placeholder="Phone" name="phone" required  <?php if($x1==0){ ?>value="<?php echo $phone; ?>" <?php } ?>>
              <input type="text" class="form-control" placeholder="City" name="city" id="locality" required  <?php if($x1==0){ ?>value="<?php echo $city; ?>" <?php } ?>>
              <input type="number" class="form-control" placeholder="Postal" name="postal" id="postal_code" required  <?php if($x1==0){ ?>value="<?php echo $postal; ?>" <?php } ?>>
            </div>
          </div>
        </div>
        <div class="col-md-12 pad_top_bot">
        <button type="submit" class="btn reg-btn" name="register">SIGNUP</button>
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