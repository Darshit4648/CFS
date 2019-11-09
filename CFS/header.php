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

   
   

</head>
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
<script>
    $(window).load(function() {
      $(".loader").fadeOut("slow");
    });
  
   
    $(window).load(function() {
      $(".loader").fadeOut("slow");
    });
  </script>

  <style>
    .loader {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url('image/loadinggif.gif') 50% 50% no-repeat rgb(249,249,249);
    opacity: .8;
    }
    </style>

<body>
<div class="loader"></div>
<div class="container col-sm-12" style="padding-left:0px;padding-right:0px;">
		
				<div class="row" style="margin-bottom:5px;margin-top:10px;">
					<div class="col-lg-12 col-md-12">
						<div style="float:left;">
             
								<br><h1  style="font-family:UniversCondensed;padding-left:10px;"><img src="Image/contract farming.png" width="120px" height="80px"> Contract Farming System</h1>
						</div>
			
					
					</div>
				</div>
		

		<nav class="navbar navbar-default" >
		  <div class="container-fluid" style="padding-bottom: 0px;">
			
			<ul class="nav navbar-nav">
			  <li><a href="home.php"><span class="glyphicon glyphicon-Home"></span></a></li>
			   <li><a href="#">About Us </a></li>

                <?php
                          if(isset($_COOKIE["uname"]))
                          {
                             include("connect.php");
                             $f_id=$_COOKIE["f_id"];
                             $qry="select * from acceptreq where f_id='$f_id' && notification=0";
                             $rs=mysqli_query($con,$qry);
                             $count=mysqli_num_rows($rs);
                            
                          	echo " <li><a href='farmeracceptreq.php'>company answer <sup><span class='badge badge-pill badge-success'><label id='companyid'>".$count."</label></span></sup> </a></li>";
                              
                               $qry1="select * from rawmaterial where f_id='$f_id' && ma_notification=0";
                                 $rs1=mysqli_query($con,$qry1);
                                 $count1=mysqli_num_rows($rs1);

                            echo" <li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#'>Raw Materials<span class='caret'></span><sup><span class='badge badge-pill badge-success'><label id='rawid'>".$count1."</label></span></sup></a>
                          <ul class='dropdown-menu'>
                            <li><a href='selectrawmaterial.php'>Select Rawmaterials </a></li>
                            <li><a href='ExtraRawmaterial.php'>Add Extra Raw Materials</a></li>      
                          </ul>    
                        </li>";
                         
                          $qry3="select * from farmsalary where f_id='$f_id' &&   f_notification=0";
                          $rs2=mysqli_query($con,$qry3);
                          $count3=mysqli_num_rows($rs2);
                         echo" <li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#'>Farm Income<span class='caret'></span><sup><span class='badge badge-pill badge-success'><label id='fsalary'>".$count3."</label></span></sup></a>
                          <ul class='dropdown-menu'>
                            <li><a href='totalproduction.php'>Add Production </a></li>
                            <li><a href='selectfarmsalary.php'>farm income </a></li>           
                          </ul>
                        </li>";
        
                             echo "<li><a href='companylocation.php'>Show Location</a></li>";
                              
                          }
                          if(isset($_COOKIE["username"]))
                          {
                              $city=$_COOKIE["city"];
                              include("connect.php");
                              $sql="select * from farmer where city='$city' && fa_notification=0";
                              $rem=mysqli_query($con,$sql);
                              $count2=mysqli_num_rows($rem);

                          	echo "<li id='not'><a href='Farmerreq.php'>Requests<sup><span  class='badge badge-pill badge-success'><label id='count2'> ".$count2."</label></span></sup> </a></li>";
                            echo "<li><a href='showlocation.php'>Farm Location </a></li>";
                                  
                                $c_id=$_COOKIE["c_id"];
                                $sql1="select * from extramaterial where c_id='$c_id' && em_notification=0";
                                $rem1=mysqli_query($con,$sql1);
                                $count3=mysqli_num_rows($rem1);

                            echo" <li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#'>Raw Materials<span class='caret'></span> <sup><span class='badge badge-pill badge-success'><label id='emrawid'>".$count3."</label></span></sup> </a>
                          <ul class='dropdown-menu'>
                            <li><a href='Rawmaterial.php'>Raw Materials </a></li>
                            <li><a href='ExtraRawmaterialacpt.php'>ExtraRaw Materials</a></li>           
                          </ul>
                        </li>";
                         echo" <li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#'>Company Accounts<span class='caret'></span></a>
                          <ul class='dropdown-menu'>
                            <li><a href='Companyaccount.php'>Companyaccount </a></li>
                            <li><a href='transportcharges.php'>transport charges</a></li>           
                          </ul>
                         </li>";
                          echo "<li><a href='Farmsalary.php'>Farmer income </a></li>";
                          }

                          if(isset($_COOKIE["Uname"]))
                          {
                                include("connect.php");
                                $qry2="select * from acceptreq where notification=1 && respondstatus=1";
                                $rem2=mysqli_query($con,$qry2);
                                $count4=mysqli_num_rows($rem2);

                                echo "<li><a href='agreement.php' id='agreement' >Generate Agreement <sup><span class='badge badge-pill badge-success'><label id='agreeid'>".$count4."</label></span></sup> </a></li>";

                                echo" <li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#'>ADD<span class='caret'></span></a>
                          <ul class='dropdown-menu'>
                            <li><a href='District.php'>Add District </a></li>
                            <li><a href='Taluka.php'>Add Talukas</a></li>  
                             <li><a href='Village.php'>Add Villages</a></li>           
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
                               echo " <li><a href='logout.php'>Logout <span class='glyphicon glyphicon-log-out'></span></a></li>";        	   
                   } 

                else
                {
                          echo" <li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#'>Registration<span class='caret'></span></a>
                          <ul class='dropdown-menu'>
                            <li><a href='FarmerReg.php'>Farmer</a></li>
                            <li><a href='CompanyReg.php'>Company</a></li>           
                          </ul>
                        </li>";
                	echo " <li><a href='login.php'>Login <span class='glyphicon glyphicon-log-in'></span></a></li> ";
                }
          ?>  
							 
      </ul>		
   </div>
   </nav>