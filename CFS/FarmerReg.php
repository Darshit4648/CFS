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
                });            
            });
            var lat=  event.latLng.lat();;
                
           
           
        }
        </script>
        <script src="http://maps.google.com/maps/api/js?sensor=false&callback=initMap"
        async defer type="text/javascript">
  </script>
</script>

<script>
  $('#fnameid').click(function(){
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
<script>
  function ValidateName() {
        var isValid = false;
        var regex = /^[a-zA-Z][a-zA-Z ]+$/;
        isValid = regex.test(document.getElementById("fnameid").value);
        document.getElementById("spnErrorName").style.display = !isValid ? "block" : "none";
        return isValid;
    }

     function ValidateFarea() {
        var isValid = false;
        var regex = /^[0-9]+$/;
        isValid = regex.test(document.getElementById("fareaid").value);
        document.getElementById("spnErrorFarea").style.display = !isValid ? "block" : "none";
        return isValid;
    }
    function ValidatePhn() {
        var isValid = false;
        var regex = /^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$/;
        isValid = regex.test(document.getElementById("mobid").value);
        document.getElementById("spnErrorPhn").style.display = !isValid ? "block" : "none";
        return isValid;
    }

    function ValidateCropname() {
        var isValid = false;
        var regex = /^[a-zA-Z ]+$/;
        isValid = regex.test(document.getElementById("cropid").value);
        document.getElementById("spnErrorCropname").style.display = !isValid ? "block" : "none";
        return isValid;
    }

    function ValidateHprice() {
        var isValid = false;
        var regex = /^[0-9]+$/;
        isValid = regex.test(document.getElementById("hprice").value);
        document.getElementById("spnErrorHprice").style.display = !isValid ? "block" : "none";
        return isValid;
    }
    function ValidateUsername() {
        var isValid = false;
        var regex = /^[a-zA-Z0-9_-]{6,14}$/;
        isValid = regex.test(document.getElementById("userid").value);
        document.getElementById("spnErrorUsername").style.display = !isValid ? "block" : "none";
        return isValid;
    }

    function ValidateFpwd() {
        var isValid = false;
        var regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;
        isValid = regex.test(document.getElementById("fpwd").value);
        document.getElementById("spnErrorFpwd").style.display = !isValid ? "block" : "none";
        return isValid;
    }

     function validateForm() {
    if( ( $("#spnErrorName").css('display') == 'none' || $("#spnErrorName").css("visibility") == "hidden")&&( $("#spnErrorFarea").css('display') == 'none' || $("#spnErrorFarea").css("visibility") == "hidden")&&( $("#spnErrorPhn").css('display') == 'none' || $("#spnErrorPhn").css("visibility") == "hidden")&&( $("#spnErrorCropname").css('display') == 'none' || $("#spnErrorCropname").css("visibility") == "hidden")&&( $("#spnErrorHprice").css('display') == 'none' || $("#spnErrorHprice").css("visibility") == "hidden")&&( $("#spnErrorUsername").css('display') == 'none' || $("#spnErrorUsername").css("visibility") ==  "hidden")&&( $("#spnErrorFpwd").css('display') == 'none' || $("#spnErrorFpwd").css("visibility") == "hidden"))
    {

    }
    else
    {
      return false;
    }

  }
</script>


<div class="container-fluid">
<div class="jumbotron col-md-offset-2 col-md-8 col-md-offset-3">
<form action="farmerinsert.php" method="POST">

<div class="row">
<div class="center-block">
   <h3 class="col-md-offset-4 col-md-6 col-md-offset-4">Farmer Registration</h3>
</div>
</div>

<div class="form-row">
<div class="form-group">
<label>Farmer Name:</label>
<input type=text class="form-control" id="fnameid"  name=txtfname placeholder="Enter Your Name"  onchange="return ValidateName(this)" required>
<span id="spnErrorName" style="color: Red; display: none">*Valid characters: alphabetical only And maximum 80 characters are allowed.</span>
</div>
</div>
<div class="form-row">
<div class="form-group col-md-4">
        <label>City:</label>
        <select class="form-control"  id="districtID" name="txtfcity" onchange="change_district()" required>
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
      <div class="form-group  col-md-4">
      <label>Taluka:</label>
       <select class="form-control" id="talukaID" name="txttaluka" onchange="change_village()" required>
         <option value="">Select</option>
       </select>
      </div>

       <div class="form-group col-md-4">
      <label>Villages:</label>
       <select class="form-control" id="villageID" name="txtvillage" required>
         <option value="">Select</option>
       </select>
      </div>
      </div>
              
               <input type="hidden" name="lat" id="latclicked" value="">
               <input type="hidden" name="long" id="longclicked" value=""> 
              
          <div>
            <div id="map" class="form-control" style="height: 300px;width:750px"></div>
        </div>
 
    <br>
 <div class="form-row">      
 <div class="form-group col-md-6">
                    <label>Moblie Number:</label>
                <input type=text  class="form-control" id="mobid" name=txtmobno placeholder="Enter Your Moblie Number" onchange="return ValidatePhn(this)" maxlength="10"   required>
                
                 <span id="spnErrorPhn" style="color: Red; display: none">*Valid characters: Numbers only, 10 Digits are allowed And Number is an Indian Number allowed.</span>
                 
                        </div>



       <div class="form-group col-md-6">
                <label>Crop Name:</label>
                <input type=text  class="form-control"  maxlength="10" name=txtcname id="cropid" placeholder="Enter Your Cropname" onchange="return ValidateCropname(this)" required>
            
                 <span id="spnErrorCropname" style="color: Red; display: none">*Valid characters: alphabetical only And maximum 80 characters are allowed.</span>
                 </div>
                 </div>
               
                 <br>
                 
                <div class="form-row">  
                <div class="form-group col-md-4">
            <label>Farm Area (In Hector):</label>
            <input type=text class="form-control area"  name=txtfarmarea id="fareaid" maxlength="3" placeholder="Enter Your FarmArea" onchange="return ValidateFarea(this)" required>
            <span id="spnErrorFarea" style="color: Red; display: none">*Valid characters: Only Numerical Numbers Are Allowed.</span>
                </div>

                
                <div class="form-group col-md-4">
                    <label>Survey Number:</label>
                <input type=text  class="form-control" name=txtsurveyno placeholder="Enter Your SurveyNumber" required>
                        </div>
                        
                        
                
                <div class="form-group col-md-4">
                <label>Harvesting Price:</label>
                <input type=text   class="form-control" id="hprice" name=txtharprice placeholder="Enter Your Harvesting Price" maxlength="5" onchange="return ValidateHprice(this)"  required>
                 <span id="spnErrorHprice" style="color: Red; display: none">*Valid characters: Only Numerical Numbers Are Allowed.</span>
                </div>
                </div>

                <div class="form-row">  
                <div class="form-group col-md-6">
                <label>Username:</label>
                <input type=text class="form-control" id="userid"  name=txtuname placeholder="Enter Your Username" onchange="return ValidateUsername(this)"  required>
                <span id="spnErrorUsername" style="color: Red; display: none">*Valid characters: Only alphabetical characters,1 underscop or hyphen,and string must be 8 or longer.</span>
                </div>
                
                <div class="form-group col-md-6">
                <label>password:</label>
                <input type=password class="form-control" id="fpwd" name=txtpassword placeholder="Enter Your password" data-toggle="password" onchange="return ValidateFpwd(this)" required>
                 <span id="spnErrorFpwd" style="color: Red; display: none">*At least 1 lowercase alphabetical character,1 uppercase alphabetical character, 1 numeric character, one special character And string must be eight characters or longer </span>
  
                </div>
    
              </div>
              <div class="form-row">
            <div class="form-group">
            <div class="col-md-2">
             <button type="submit" name="submit" id="submit" class="btn btn-primary" onclick="return validateForm();">Submit</button>
            </div>
            <div class="col-sm-2">
            <a href="FarmerReg.php" class="btn btn-danger" role="button" >Cancle </a>
            </div>
            </div>
            </div>
                    
</form>

</div>
</div>

<?php
include_once("footer.php");
?>
