<?php
include("header.php");
?>
<!-- <?php// echo $_COOKIE["Uname"]; ?> -->
<div class="container-fluid">  
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">  
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->           
    <div class="carousel-inner">
      <div class="item active">
        <img src="image\farmimage.jpg"  style="width:100%;height:500px">
      </div>

      <div class="item">
        <img src="image\farmimage1.jpg"  style="width:100%;height:500px">
      </div>
    
      <div class="item">
        <img src="image\farmimage2.jpg"  style="width:100%;height:500px">
      </div>

       <div class="item">
        <img src="image\farmimage3.jpg"  style="width:100%;height:500px">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


</div>



<?php
include("footer.php");
?>