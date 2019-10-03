<?php
include("header.php");
?>

<script>
//Get the button
$(window).scroll(function() {
    var height = $(window).scrollTop();
    if (height > 100) {
        $('#myBtn').fadeIn();
    } else {
        $('#myBtn').fadeOut();
    }
});
$(document).ready(function() {
    $("#myBtn").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

});

</script>
<script>
  $(".carousel").swipe({

  swipe: function(event, direction, distance, duration, fingerCount, fingerData) {

    if (direction == 'left') $(this).carousel('next');
    if (direction == 'right') $(this).carousel('prev');

  },
  allowPageScroll:"vertical"

});
</script>
<style>

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: grey;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}



</style>
<button onclick="topFunction()" id="myBtn" title="Go to top"><span class="glyphicon glyphicon-arrow-up"></span></button>
<!-- <?php// echo $_COOKIE["Uname"]; ?> -->
<div class="container-fluid">
       
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      <li data-target="#carousel-example-generic" data-slide-to="3"></li>
      <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="image\cfs1.jpg" style="width:100%;height:500px">
      </div>
      <div class="item">
        <img src="image\cfs2.jpg" style="width:100%;height:500px">
      </div>
      <div class="item">
        <img src="image\cfs3.jpg" style="width:100%;height:500px">
      </div>
      <div class="item">
        <img src="image\farmimage1.jpg" style="width:100%;height:500px">
      </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</div>
<br>
&nbsp;
<div id="about-section" class="container about-padd no-padding">



        <div class="sm-padding about-wrap">
            <!--<div class="col-md-12 no-padding">
                <img class="img-responsive index_about_image" src="assets/img/loader.gif" data-src="assets/img/about.jpg" alt="Agriculture Management Software" />
            </div>-->

            <div class="col-md-6 col-sm-12">
                <img class="img-thumbnail" src="image\agriimage2.jpg"  style="width:500px;height:350px" alt="Agriculture Management Software" />
            </div>
            <div class="col-md-6 col-sm-12 ">
                <div class="row">
                    <h2 class="h1-responsive font-weight-bold my-5">About Contract Farming</h2>
                </div>
                <div class="row">
                    
                </div>
                <div class="row">
                <blockquote class="blockquote text-left">
                    <p >
                        At FarmERP we aim at the technology-intensive transformation of agriculture and agribusiness. With a strong R&D and professional Agri-ICT expertise of 16+ years gained from hundreds .
                    </p>
                    </blockquote>
                    <blockquote class="blockquote text-left">
                    <p>
                        FarmERP software platform is most advanced, successful and best farm management software platform being widely used globally for farm, farmer, procurement, processing, supply chain and financial data management and analysis. 
                    </p>

                       </blockquote>
                </div>
            </div>
        </div>
    </div>

<br>


<div class="text-center my-5">

  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold my-5">Users</h2>
  <!-- Section description -->
  <p class="lead grey-text w-responsive mx-auto mb-5"></p>

  
  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-4">

      <i class="fas fa-chart-area fa-3x red-text"></i>
    <img class="img-rounded" src="image\3.png"  style="width:300px;height:200px">
     <blockquote class="blockquote text-center">
      <p class="h1-responsive font-weight-bold my-5">
      Admin
      </p>
      </blockquote>
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-4">

      <i class="fas fa-book fa-3x cyan-text"></i>
        <img class="img-rounded" src="image\farmer2.png"  style="width:300px;height:200px">
        <blockquote class="blockquote text-center">
     <p class="h1-responsive font-weight-bold my-5">
      Farmer
      </p>
      </blockquote>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-4">

      <i class="far fa-comments fa-3x orange-text"></i>
        <img class="img-rounded" src="image\companymanager2.png"  style="width:300px;height:200px">
        <blockquote class="blockquote text-center">
      <p class="h1-responsive font-weight-bold my-5">
      Company Supervisor
      </p>
      </blockquote>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->
</div>
<!-- Section: Features v.1 -->
<br>

  <style> 
  #map { 
    height: 350px; 
    width: 400; 
    margin-left: 850px;
  } 
  </style> 

  <h2 class="h1-responsive font-weight-bold my-5" style=" margin-left: 240px;">Contact Us</h2>
  <div  class=" col-sm-4 col-sm-offset-2">
  <blockquote class="blockquote text-left">
    <p>Darshit Tank</p>
    <p>Email:tankdarshit437@gmail.com</p>
    <p>mobile No:7203928175</p>
    <p>College Of Agricultural Information Technology,AAU,Anand</p>
    
  </blockquote>
  </div>
  <div id="map" ></div> 
  <script> 
  function initMap() { 
    var uluru = {lat: 22.533656,  lng: 72.970049}; 
    var map = new google.maps.Map(document.getElementById('map'), { 
    zoom: 4, 
    center: uluru 
    }); 
    var marker = new google.maps.Marker({ 
    position: uluru, 
    map: map 
    }); 
  } 
  </script> 
  <script src="http://maps.google.com/maps/api/js?sensor=false&callback=initMap"
        async defer type="text/javascript">
  </script>
 

<br>


<?php
include("footer.php");
?>