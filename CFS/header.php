 <head>
  <title>CFS</title>
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
   

</head>
<?php
    include("connect.php");
    $qry="select * from acceptreq where respondstatus=0";
    $rs=mysqli_query($con,$qry);
    $count=mysqli_num_rows($rs);
?>
<script>
 
 $(document).ready(function(){
  $('[data-toggle="popover"]').popover();   
});

$("#notification-latest").live("click",function() {
    $.ajax({
      url: "view_notification.php",
      type: "POST",
      processData:false,
      success: function(data){
        $("#notification-count").remove();          
        $("#notification-latest").show();$("#notification-latest").html(data);
      },
      error: function(){}           
    });
   }
   
   $(document).ready(function() {
    $('body').click(function(e){
      if ( e.target.id != 'notification-icon'){
        $("#notification-latest").hide();
      }
    });
  });
</script>
 
<body>
<div class="container">
		
				<div class="row" style="margin-bottom:5px;margin-top:10px;">
					<div class="col-lg-12 col-md-12">
						<div style="float:left;">
             
								<br><h1  style="padding-left:10px;font-family:UniversCondensed;"><img src="Image/contract farming.png" width="120px" height="80px"> Contract Farming System</h1>
						</div>
			
					
					</div>
				</div>
		

		<nav class="navbar navbar-default">
		  <div class="container-fluid">
			
			<ul class="nav navbar-nav">
			  <li><a href="home.php"><span class="glyphicon glyphicon-Home"></span></a></li>
			   <li><a href="#">About Us </a></li>

                <?php
                          if(isset($_COOKIE["uname"]))
                          {
                            
                          	echo " <li><a href='farmeracceptreq.php'>company answer </a></li>";
                           
                            echo" <li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#'>Raw Materials<span class='caret'></span></a>
                          <ul class='dropdown-menu'>
                            <li><a href='selectrawmaterial.php'>Select Rawmaterials </a></li>
                            <li><a href='ExtraRawmaterial.php'>Add Extra Raw Materials</a></li>      
                          </ul>    
                        </li>";
                         
                          
                         echo" <li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#'>Farm Income and production<span class='caret'></span></a>
                          <ul class='dropdown-menu'>
                            <li><a href='totalproduction.php'>Add Production </a></li>
                            <li><a href='selectfarmsalary.php'>farm income </a></li>           
                          </ul>
                        </li>";

                            
                             echo "<li><a href='companylocation.php'>Show Location</a></li>";

                                // echo "<li><a href='#' data-toggle='popover' data-placement='bottom' id ='notification-count'>"; {echo $count;}
                                // echo "<span class='glyphicon glyphicon-envelope' id='notification-latest'></span>";
                               
                                // echo "</li>";


                                  // echo "<li><a href='#' title='Header' data-toggle='popover' data-placement='bottom'  onclick='myFunction()' data-content='data'><span id='notification-count'> "; if($count>0) { echo $count; }echo"</span><img src='image/notification-icon.png' /></a></li>";    

                               // echo "<li><span class='fa fa-bell' id='notification-icon'  data-placement='bottom'  onclick='myFunction()'><span id='notification-count'> "; if($count>0) { echo $count; }echo"</span><img src='image/notification-icon.png' />";
                               //  echo "<div id='notification-latest'></div>";
                               //  echo "</li>"; 
                                                  
                          }
                          if(isset($_COOKIE["username"]))
                          {
                          	echo "<li><a href='Farmerreq.php'>Requests </a></li>";
                            echo "<li><a href='showlocation.php'>Farm Location </a></li>";
                                  
                            echo" <li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#'>Raw Materials<span class='caret'></span></a>
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
                                echo "<li><a href='agreement.php' id='agreement'>Generate Agreement </a></li>";
 
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