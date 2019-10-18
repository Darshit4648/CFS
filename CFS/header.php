 <head>
  <title> WELCOME CFS</title>

  <link rel="icon" href="Image/c1.png" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html;charset=utf8">
  	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="notification-demo-style.css" type="text/css">
	<script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/validate.js"></script>
    <script src="gu/jsapi.js"></script>
	<script src="js/bootstrap.min.js"></script>	
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-show-password/1.0.3/bootstrap-show-password.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    
<script type="text/javascript">
    $(window).load(function() {
      $(".loader").fadeOut("slow");
    });
  </script>
   
</head>
<style>
  .loader {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url('image/Preloader_28.gif') 50% 50% no-repeat rgb(249,249,249);
    opacity: .8;
}
.hovereffect {
    display: inline-block;
    vertical-align: middle;
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
    box-shadow: 0 0 1px rgba(0, 0, 0, 0);
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -moz-osx-font-smoothing: grayscale;
    position: relative;
    overflow: hidden;
}
.hovereffect:before {
    content: "";
    position: absolute;
    z-index: -1;
    left: 50%;
    right: 50%;
    bottom: 0;
    background: #2098d1;
    height: 4px;
    -webkit-transition-property: left, right;
    transition-property: left, right;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-timing-function: ease-out;
    transition-timing-function: ease-out;
}
.hovereffect:hover:before, .hovereffect:focus:before, .hovereffect:active:before {
    left: 0;
    right: 0;
}
.shuttereffect{
   display: inline-block;
    vertical-align: middle;
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
    box-shadow: 0 0 1px rgba(0, 0, 0, 0);
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -moz-osx-font-smoothing: grayscale;
    position: relative;
    -webkit-transition-property: color;
    transition-property: color;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
}
.shuttereffect:before {
    content: "";
    position: absolute;
    z-index: -1;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: #2098d1;
    -webkit-transform: scaleX(0);
    transform: scaleX(0);
    -webkit-transform-origin: 50%;
    transform-origin: 50%;
    -webkit-transition-property: transform;
    transition-property: transform;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-timing-function: ease-out;
    transition-timing-function: ease-out;
}
.shuttereffect:hover, .shuttereffect:focus, .shuttereffect:active {
    color: #fff;
}
.shuttereffect:hover:before, .shuttereffect:focus:before, .shuttereffect:active:before {
    -webkit-transform: scaleX(1);
    transform: scaleX(1);
}
.dropdown-menu > li > a:hover, .dropdown-menu > li > a:focus, .dropdown-menu > li > a:active {
    background: none;
    color: #fff;
}
</style>

  <div class="loader"></div>

  
<?php
    include("connect.php");
    $qry="select * from acceptreq where respondstatus=0";
    $rs=mysqli_query($con,$qry);
    $count=mysqli_num_rows($rs);
?>

<script>
 $("#not").onclick(function(){
  $('#noti').text('0');
});
</script>
<body>
<div class="container col-sm-12" style="padding-left:0px;padding-right:0px;padding-top: 0px;">
		
				<div class="row" style="margin-bottom:5px;margin-top:10px;padding-bottom:0px;">
					<div class="col-lg-12 col-md-12">
						<div style="float:left;">
             
								<br><h1  style="font-family:UniversCondensed;padding-left:10px;padding-bottom:0px;"><img src="Image/contract farming.png" width="120px" height="80px"> Contract Farming System</h1>
						</div>
			
					
					</div>
				</div>
		

		<nav class="navbar navbar-default" >
		  <div class="container-fluid" style="padding-bottom: 0px;">
			
			<ul class="nav navbar-nav">
			  <li><a href="home.php" class='hovereffect'><span class="glyphicon glyphicon-Home"></span></a></li>
			   <li><a href="#" class='hovereffect'>About Us </a></li>

                <?php
                          if(isset($_COOKIE["uname"]))
                          {
                             include("connect.php");
                             $f_id=$_COOKIE["f_id"];
                             $qry="select * from acceptreq where f_id='$f_id' && notification=0";
                             $rs=mysqli_query($con,$qry);
                             $count=mysqli_num_rows($rs);
                            
                          	echo " <li><a href='farmeracceptreq.php' class='hovereffect'>company answer <sup><span class='badge badge-pill badge-success'><label id='companyid'>".$count."</label></span></sup> </a></li>";
                              
                               $qry1="select * from rawmaterial where f_id='$f_id' && ma_notification=0";
                                 $rs1=mysqli_query($con,$qry1);
                                 $count1=mysqli_num_rows($rs1);

                            echo" <li class='dropdown'><a class='dropdown-toggle hovereffect' data-toggle='dropdown' href='#'>Raw Materials<span class='caret'></span><sup><span class='badge badge-pill badge-success'><label id='rawid'>".$count1."</label></span></sup></a>
                          <ul class='dropdown-menu'>
                            <li><a href='selectrawmaterial.php' class='shuttereffect'>Select Rawmaterials </a></li>
                            <li><a href='ExtraRawmaterial.php' class='shuttereffect'>Add Extra Raw Materials</a></li>      
                          </ul>    
                        </li>";
                         
                          $qry3="select * from farmsalary where f_id='$f_id' &&   f_notification=0";
                          $rs2=mysqli_query($con,$qry3);
                          $count3=mysqli_num_rows($rs2);
                         echo" <li class='dropdown'><a class='dropdown-toggle hovereffect' data-toggle='dropdown' href='#'>Farm Income<span class='caret'></span><sup><span class='badge badge-pill badge-success'><label id='fsalary'>".$count3."</label></span></sup></a>
                          <ul class='dropdown-menu'>
                            <li><a href='totalproduction.php' class='shuttereffect'>Add Production </a></li>
                            <li><a href='selectfarmsalary.php' class='shuttereffect'>farm income </a></li>           
                          </ul>
                        </li>";
        
                             echo "<li><a href='companylocation.php' class='hovereffect'>Show Location</a></li>";
                              
                          }
                          if(isset($_COOKIE["username"]))
                          {
                              $city=$_COOKIE["city"];
                              include("connect.php");
                              $sql="select * from farmer where city='$city' && fa_notification=0";
                              $rem=mysqli_query($con,$sql);
                              $count2=mysqli_num_rows($rem);

                          	echo "<li id='not'><a href='Farmerreq.php' class='hovereffect'>Requests<sup><span  class='badge badge-pill badge-success'><label id='count2'> ".$count2."</label></span></sup> </a></li>";
                            echo "<li><a href='showlocation.php' class='hovereffect'>Farm Location </a></li>";
                                  
                                $c_id=$_COOKIE["c_id"];
                                $sql1="select * from extramaterial where c_id='$c_id' && em_notification=0";
                                $rem1=mysqli_query($con,$sql1);
                                $count3=mysqli_num_rows($rem1);

                            echo" <li class='dropdown'><a class='dropdown-toggle hovereffect' data-toggle='dropdown' href='#'>Raw Materials<span class='caret'></span> <sup><span class='badge badge-pill badge-success'><label id='emrawid'>".$count3."</label></span></sup> </a>
                          <ul class='dropdown-menu'>
                            <li><a href='Rawmaterial.php' class='shuttereffect'>Raw Materials </a></li>
                            <li><a href='ExtraRawmaterialacpt.php' class='shuttereffect'>ExtraRaw Materials</a></li>           
                          </ul>
                        </li>";
                         echo" <li class='dropdown'><a class='dropdown-toggle hovereffect' data-toggle='dropdown' href='#'>Company Accounts<span class='caret'></span></a>
                          <ul class='dropdown-menu'>
                            <li><a href='Companyaccount.php' class='hovereffect'>Companyaccount </a></li>
                            <li><a href='transportcharges.php' class='hovereffect'>transport charges</a></li>           
                          </ul>
                         </li>";
                          echo "<li><a href='Farmsalary.php' class='hovereffect'>Farmer income </a></li>";
                          }

                          if(isset($_COOKIE["Uname"]))
                          {
                                include("connect.php");
                                $qry2="select * from acceptreq where notification=1 && respondstatus=1";
                                $rem2=mysqli_query($con,$qry2);
                                $count4=mysqli_num_rows($rem2);

                                echo "<li><a href='agreement.php' class='hovereffect' id='agreement' >Generate Agreement <sup><span class='badge badge-pill badge-success'><label id='agreeid'>".$count4."</label></span></sup> </a></li>";

                                echo" <li class='dropdown'><a class='dropdown-toggle hovereffect' data-toggle='dropdown' href='#'>ADD<span class='caret'></span></a>
                          <ul class='dropdown-menu'>
                            <li><a href='District.php' class='shuttereffect'>Add District </a></li>
                            <li><a href='Taluka.php' class='shuttereffect'>Add Talukas</a></li>  
                             <li><a href='Village.php' class='shuttereffect'>Add Villages</a></li>           
                          </ul>
                        </li>";
 
                          }
                ?>

			 

			</ul>

 <ul class="nav navbar-nav navbar-right">	
                           
			<?php      
                if((isset($_COOKIE["uname"]))||(isset($_COOKIE["username"]))||(isset($_COOKIE["Uname"])))
                {  
                   if(isset($_COOKIE["fname"]))
                   {
                      ?><p class='navbar-text' style='margin-top:15px;margin-bottom:10px;color:green;'><a href='farmerupdate.php'> Welcome &nbsp; <?php echo $_COOKIE['fname']?></p></a>
                      <?php
                   }
                  if (isset($_COOKIE["companysname"])) {
                       ?><p class='navbar-text' style='margin-top:15px;margin-bottom:10px;color:green;'><a href='companyupdate.php'>Welcome &nbsp;<?php echo $_COOKIE['companysname']?></p></a>
                        <?php
                   }
                   if (isset($_COOKIE["Uname"])) {
                       ?><p class='navbar-text' style='margin-top:15px;margin-bottom:10px;color:grey;'>Welcome &nbsp;<?php echo $_COOKIE['Uname']?></p>
                        <?php
                   }  
                               echo " <li><a href='logout.php' class='hovereffect'>Logout <span class='glyphicon glyphicon-log-out'></span></a></li>";        	   
                   } 

                else
                {
                          echo" <li class='dropdown'><a class='dropdown-toggle hovereffect' data-toggle='dropdown' href='#'>Registration<span class='caret'></span></a>
                          <ul class='dropdown-menu'>
                            <li><a href='FarmerReg.php' class='shuttereffect'>Farmer</a></li>
                            <li><a href='CompanyReg.php'  class='shuttereffect'>Company</a></li>           
                          </ul>
                        </li>";
                	echo " <li><a href='login.php' class='hovereffect'>Login <span class='glyphicon glyphicon-log-in'></span></a></li> ";
                }
          ?>  
							 
      </ul>		
   </div>
   </nav>