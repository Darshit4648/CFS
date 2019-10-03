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
        <script src="http://maps.google.com/maps/api/js?sensor=false&callback=initMap"
        async defer type="text/javascript">
  </script>
       

<script>
  $("#adressid").click(function(){
  alert();
});
</script>

<script type="text/javascript">

  function change_district()
  {
    var id =$('#districtID').val();


    var request = $.ajax({
      url: "FarmerReg1.php",
      type: "GET",
      data: {district : id},
      dataType: "html"
    });

    request.done(function(msg) {
      $("#talukaID").html("");
      $("#talukaID").html(msg);        
    });

    request.fail(function(jqXHR, textStatus) {
      alert( "Request failed: " + textStatus );
    });
  }



  function change_village()
  {
    var tid =$('#talukaID').val();
    var did =$('#districtID').val();
    

    var request = $.ajax({
      url: "talukaajax.php",
      type: "GET",
      data: {taluka : tid,district:did},
      dataType: "html"
    });
   //alert(tid);

    request.done(function(msg) {
      $("#villageID").html("");
      $("#villageID").html(msg);        
    });

    request.fail(function(jqXHR, textStatus) {
      alert( "Request failed: " + textStatus );
    });
  }
</script>


<div class="offset-md-4 jumbotron offset-md-4">
<div class="container-fluid">
<form action="companyinsert.php" method="POST">

<div class="row">
<div class="center-block">
   <h3 class="col-md-6 col-md-offset-4">Company Registration </h3>
</div>
</div>
<div class="row">
<div class="col-md-4 col-md-4 col-md-offset-4">

<div class="form-group">
<label>Company Name:</label>
<input type=text class="form-control"  name=txtcname placeholder="Enter Your Company Name"  required >
</div>

<div class="form-group">
            <label>Company Supervisor Name:</label>
            <input type=text  class="form-control"  name=txtsname placeholder="Enter Your name" required>
                </div>
              <div class="form-group">
        <label>City:</label>
        <select class="form-control"  id="districtID" name="txtcity" onchange="change_district()" required>
          <option selected value="0">select</option>
          <?php
          include("connect.php");
           $qry="select * from city";
           $rs=mysqli_query($con,$qry);
          echo $qry;
           while($data=mysqli_fetch_assoc($rs))
           {
             echo "<option value='".$data["c_id"]."'>".$data["cityname"]."</option>";
          
           }
          ?>
        </select>
      </div>

       <div class="form-group">
      <label>Taluka:</label>
       <select class="form-control" id="talukaID" name="txttaluka" onchange="change_village()" required>
         <option value="">Select</option>
       </select>
      </div>
    
    <div class="form-group">
      <label>Villages:</label>
       <select class="form-control" id="villageID" name="txtvillage" required>
         <option value="">Select</option>
       </select>
      </div>

               <input type="hidden" name="lat" id="latclicked" value="">
               <input type="hidden" name="long" id="longclicked" value=""> 
             
          <div>
            <div id="map" class="form-control"  style="height: 300px;width:300px"></div>
        </div>
       

                <div class="form-group">
            <label>Address:</label>
            <input type=text class="form-control" name=txtaddress id="adressid" placeholder="Enter Your Address" required>
                </div>

                 <div class="form-group">
            <label>Mobile Number:</label>
            <input type=text  class="form-control" name=txtmobno id="mob" placeholder="Enter Your mobile Number" maxlength=10 required title="please enter valid mobile number maximum 10 digits">
                </div>
                
                <div class="form-group">
                    <label>Email:</label>
                <input type=email  class="form-control" name=txtemail id="emailid" placeholder="Enter Your Email" required>
                        </div>
                        
                        
                        <div class="form-group">
                    <label>Username:</label>
                <input type=text  class="form-control" name=txtusername placeholder="Enter Your Username"  required pattern="[a-z]{1,15}">
                        </div>

                <div class="form-group">
                <label>Password:</label>
                <input type=password  class="form-control"  maxlength="10" name=txtpassword  placeholder="Enter Your Password" data-toggle="password" required>
                </div>
                
            <div class="form-group">
            <div class="col-sm-4">
            <input type="submit" class="btn btn-primary" value="Submit">
            </div>
            <div class="col-sm-4">
            <a href="CompanyReg.php" class="btn btn-danger" role="button" >Cancle </a>
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
