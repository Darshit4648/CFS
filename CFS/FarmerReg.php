<?php
     include_once("header.php");
?>
<script>
    
        var map;
        
        function initMap() {                            
            var latitude = 22.551720 ; // YOUR LATITUDE VALUE
            var longitude = 72.950550; // YOUR LONGITUDE VALUE
            
            var myLatLng = {lat: latitude, lng: longitude};
            
            map = new google.maps.Map(document.getElementById('map'), {
              center: myLatLng,
              zoom: 14,
              disableDoubleClickZoom: true, // disable the default map zoom on double click
            });
            
            // Update lat/long value of div when anywhere in the map is clicked    
            google.maps.event.addListener(map,'click',function(event) {                
                document.getElementById('latclicked').innerHTML = event.latLng.lat();
                document.getElementById('longclicked').innerHTML =  event.latLng.lng();
                document.getElementById('latclicked').value =  event.latLng.lat();;
                document.getElementById('longclicked').value =  event.latLng.lng();;
            });
            
                    
            var marker = new google.maps.Marker({
              position: myLatLng,
              map: map,
              
              title: latitude + ', ' + longitude 
            });    
            
            
            marker.addListener('click', function(event) {              
              document.getElementById('latclicked').innerHTML = event.latLng.lat();
              document.getElementById('longclicked').innerHTML =  event.latLng.lng();
            });
            
            
            google.maps.event.addListener(map,'dblclick',function(event) {
                var marker = new google.maps.Marker({
                  position: event.latLng, 
                  map: map, 
                  title: event.latLng.lat()+', '+event.latLng.lng()
                });
                
                marker.addListener('click', function() {
                  document.getElementById('latclicked').innerHTML = event.latLng.lat();
                  document.getElementById('longclicked').innerHTML =  event.latLng.lng();
                   //document.getElementById('longclicked').value = "aa";
                });            
            });
            var lat=  event.latLng.lat();;
                
           
           
        }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAP9VOU7YA6yBwmW2ivYgj2reFP7u9Iz70&callback=initMap"
        async defer></script>
</script>
<?php 
?>

<div class="offset-md-4 jumbotron offset-md-4">
<div class="container-fluid">
<form action="farmerinsert.php" method="POST">

<div class="row">
<div class="center-block">
   <h3 class="col-md-5 col-md-offset-4">Farmer Registration </h3>
</div>
</div>
<div class="row">
<div class="col-md-4 col-md-4 col-md-offset-4">

<div class="form-group">
<label>Farmer Name:</label>
<input type=text class="form-control"  name=txtfname placeholder="Enter Your Name"  required>
</div>

<div class="form-group">
            <label>City:</label>
            <input type=text  class="form-control"  name=txtcity placeholder="Enter Your City" required>
                </div>

              <!--  <p id="latclicked" ></p>
              <p id="longclicked"></p> 
              -->
               <input type="hidden" name="lat" id="latclicked" value="">
               <input type="hidden" name="long" id="longclicked" value=""> 
               <!--  <div id="latclicked"></div>
              <div id="longclicked"></div> -->
          <div>
            <div id="map" class="form-control" style="height: 300px;width:300px"></div>
        </div>
       

                <div class="form-group">
            <label>Farm Area (In Hector):</label>
            <input type=text class="form-control" name=txtfarmarea placeholder="Enter Your FarmArea" required>
                </div>

                
                <div class="form-group">
                    <label>Survey Number:</label>
                <input type=text  class="form-control" name=txtsurveyno placeholder="Enter Your SurveyNumber" required>
                        </div>
                        
                        
                        <div class="form-group">
                    <label>Moblie Number:</label>
                <input type=text  class="form-control" name=txtmobno placeholder="Enter Your Moblie Number"  required>
                        </div>



                <div class="form-group">
                <label>Crop Name:</label>
                <input type=text  class="form-control"  maxlength="10" name=txtcname  placeholder="Enter Your Cropname" required>
                </div>
            
                
                <div class="form-group">
                <label>Harvesting Price:</label>
                <input type=text   class="form-control"  name=txtharprice placeholder="Enter Your Harvesting Price" required>
                </div>
                
                
                <div class="form-group">
                <label>Username:</label>
                <input type=text class="form-control"  name=txtuname placeholder="Enter Your Username" required>
                </div>
                
                <div class="form-group">
                <label>password:</label>
                <input type=password class="form-control"  name=txtpassword placeholder="Enter Your password" data-toggle="password" required>

                </div>
    
                
                
                
            <div class="form-group">
            <div class="col-sm-4">
            <input type="submit" class="btn btn-primary" value="Submit ">
            </div>
            <div class="col-sm-4">
            <a href="FarmerReg.php" class="btn btn-danger" role="button" >Cancle </a>
            </div>
            </div>
                    
</form>

</div>
</div>

</div>
</div>
<?php
include_once("footer.php");
?>
