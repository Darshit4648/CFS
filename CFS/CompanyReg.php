<?php
     include_once("header.php");
?>
 <script src="http://maps.google.com/maps/api/js?sensor=false&callback=initMap"
        async defer type="text/javascript">
  </script>
 <!--  <script>
    $("#villageID").change(function(){
          $.ajax({
              url: "maplocation.php",
              type: "GET",
              data:{
                  "vid":$(this).val()
              },
              success: function(data){
                  var res = $.parseJSON(data);
                  // var lati=res.lat;
                  // var longi=res.lon;
                  alert(res.lat);
                 //initMap(lati,longi);
              },
              error: function(error){
                console.log(error);
                alert('error;' + error.responseText);
              }

          });
      });
</script> -->
<script>
    var map;
    function initMap() {           
            var latitude = 22.535848; // YOUR LATITUDE VALUE
            var longitude = 72.974756; // YOUR LONGITUDE VALUE
            
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
<script>
  function ValidateCname() {
        var isValid = false;
        var regex = /^[a-zA-Z][a-zA-Z ]+$/;
        isValid = regex.test(document.getElementById("cnameid").value);
        document.getElementById("spnErrorCname").style.display = !isValid ? "block" : "none";
        return isValid;
    }

    function ValidateSname() {
        var isValid = false;
        var regex = /^[a-zA-Z][a-zA-Z ]+$/;
        isValid = regex.test(document.getElementById("snameid").value);
        document.getElementById("spnErrorSname").style.display = !isValid ? "block" : "none";
        return isValid;
    }

     function ValidateCphn() {
        var isValid = false;
        var regex = /^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$/;
        isValid = regex.test(document.getElementById("phnid").value);
        document.getElementById("spnErrorCphn").style.display = !isValid ? "block" : "none";
        return isValid;
    }

function ValidateEmail() {
        var isValid = false;
        var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        isValid = regex.test(document.getElementById("emailid").value);
        document.getElementById("spnErrorEmail").style.display = !isValid ? "block" : "none";
        return isValid;
    }
 function ValidateCusername() {
        var isValid = false;
        var regex = /^[a-zA-Z0-9_-]{6,14}$/;
        isValid = regex.test(document.getElementById("userid").value);
        document.getElementById("spnErrorCusername").style.display = !isValid ? "block" : "none";
        return isValid;
    }
     function ValidateCpwd() {
        var isValid = false;
        var regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;
        isValid = regex.test(document.getElementById("cpwd").value);
        document.getElementById("spnErrorCpwd").style.display = !isValid ? "block" : "none";
        return isValid;
    }
    function validateForm() {
    if( ( $("#spnErrorCname").css('display') == 'none' || $("#spnErrorCname").css("visibility") == "hidden")&&( $("#spnErrorSname").css('display') == 'none' || $("#spnErrorSname").css("visibility") == "hidden")&&( $("#spnErrorCphn").css('display') == 'none' || $("#spnErrorCphn").css("visibility") == "hidden")&&( $("#spnErrorEmail").css('display') == 'none' || $("#spnErrorEmail").css("visibility") == "hidden")&&( $("#spnErrorCusername").css('display') == 'none' || $("#spnErrorCusername").css("visibility") == "hidden")&&( $("#spnErrorCpwd").css('display') == 'none' || $("#spnErrorCpwd").css("visibility") ==  "hidden"))
    {

    }
    else
    {
      return false;
    }

  }
</script>
<?php
if(isset($_GET["er"]))
                            {
                                echo"<div class='col-md-4 col-md-offset-4'>
                 <div class='form-group'>
                                            <div class='alert alert-danger alert-dismissable fade in'>
                                                <a href='#' class='close' data-dismiss='alert'>&times;</a>
                                                                      Your captcha is invalid !!!
                                            </div>
                                        </div>
                                    </div>";
                            }   
                            ?>
<div class="container-fluid">
<div class="jumbotron col-md-offset-2 col-md-8 col-md-offset-3">
<form action="companyinsert.php" method="POST">

<div class="row">
<div class="center-block">
   <h3 class="col-md-offset-4 col-md-6 col-md-offset-4">Company Registration </h3>
</div>
</div>
<br>

<div class="form-row">
<div class="form-group col-md-6">
<label>Company Name:</label>
<input type=text class="form-control"  name=txtcname id="cnameid"  placeholder="Enter Your Company Name" onchange="return ValidateCname(this)"  required >
<span id="spnErrorCname" style="color: Red; display: none">*Valid characters: alphabetical only And maximum 80 characters are allowed.</span>

</div>

<div class="form-group col-md-6">
            <label>Company Supervisor Name:</label>
            <input type=text  class="form-control"  id="snameid" name=txtsname placeholder="Enter Your name" onchange="return ValidateSname(this)"  required>
            <span id="spnErrorSname" style="color: Red; display: none">*Valid characters: alphabetical only And maximum 80 characters are allowed.</span>
            
                </div>
              </div>
               
              <div class="form-row"> 
              <div class="form-group col-md-4">
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

       <div class="form-group col-md-4">
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
            <div id="map" class="form-control"  style="height: 300px;width:750px"></div>
        </div>
        <br>
       
                
                <div class="form-group">
            <label>Address:</label>
            <textarea type=text class="form-control" name="txtaddress" id="adressid" placeholder="Enter Your Address"  required></textarea>  
          
                </div>
                
                  
                   <div class="form-row">
                 <div class="form-group col-md-6">
            <label>Mobile Number:</label>
            <input type=text  class="form-control" name=txtmobno id="phnid"  placeholder="Enter Your mobile Number" onchange="return ValidateCphn(this)" maxlength="10" required >
            <div class="form-row">
            <span id="spnErrorCphn" style="color: Red; display: none">*Valid characters: Numbers only, 10 Digits are allowed And Number is an Indian Number allowed.</span>
           </div>
                </div>
              

                
                <div class="form-group col-md-6">
                    <label>Email:</label>
                <input type=text  class="form-control" name=txtemail id="emailid" placeholder="Enter Your Email" onchange="return ValidateEmail(this)" required>
                <div class="form-row">
                 <span id="spnErrorEmail" style="color: Red; display: none">*Valid Email Address.</span>
                </div>
                        </div>
                        </div>
                        
                        <div class="form-row">
                        <div class="form-group col-md-6">
                    <label>Username:</label>
                <input type=text  class="form-control" name=txtusername id="userid" placeholder="Enter Your Username" onchange="return ValidateCusername(this)" required>
                <div class="form-row">
                <span id="spnErrorCusername" style="color: Red; display: none">*Valid characters: Only alphabetical characters,1 underscop or hyphen,and string must be 8 or longer.</span>
                </div>
                        </div>
                        
                        

                <div class="form-group col-md-6">
                <label>Password:</label>
                <input type=password  class="form-control" id="cpwd"  name=txtpassword  placeholder="Enter Your Password" data-toggle="password"   onchange="return ValidateCpwd(this)" required>
                 <div class="form-row">
                <span id="spnErrorCpwd" style="color: Red; display: none">*At least 1 lowercase alphabetical character,1 uppercase alphabetical character, 1 numeric character, one special character And string must be eight characters or longer </span>
                   </div>
                </div>
                </div>

                 <div class="form-row">   
              <div class="form-group col-md-6">    
                                 <label>Captcha:</label>  
                                <input  type="text" class="form-control" name="txtcaptcha" id="captchaid" placeholder="Enter Your Captcha" required>
                                <br>
                                </div>
                                
                                  <div style="margin-top: 25px;" class="form-group col-md-6"> 
                                 <img id="captcha_code" src="capcha.php" />
                                 <span class="glyphicon glyphicon-refresh" id="refersh"> </span>
                              </div>
                              </div>

             <div class="form-row">    
            <div class="form-group">
            <div class="col-sm-8">
            <button type="submit" name="submit" id="submit" class="btn btn-primary" onclick="return validateForm();">Submit</button>
        
            <a href="CompanyReg.php" class="btn btn-danger" role="button" >Cancle </a>
            </div>
            </div>
            </div>
                    
</form>
</div>
</div>

<script>
      $('#refersh').click(function() {
    $('#captcha_code').attr('src','capcha.php');
});
   </script>  
<?php
include_once("footer.php");
?>
