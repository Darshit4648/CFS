  <?php

    include("connect.php");
    include("header.php");

     $f_id=$_COOKIE["f_id"];
    
      $city=$_COOKIE["city"];
      
       
      $qry="select * from acceptreq where f_id ='$f_id' && respondstatus=0";
       $rs=mysqli_query($con,$qry);
       $count=mysqli_num_rows($rs);
       
      
                        
       echo"<table border=1 class='table table-bordered table-hover table-responsive'>";
			echo"<thead><tr>";
       echo "<h3 class='col-md-offset-5'>Contract Details</h3>";
       if(isset($_GET["err"]))
                            {
                                echo"<div class='col-md-4 col-md-offset-4 '>
                                        <div class='form-group'>
                                            <div class='alert alert-success alert-dismissable fade in'>
                                                <a href='#' class='close' data-dismiss='alert'>&times;</a>
                                                      you are accepted company contract Farming and send mail to the company.
                                                      </div>
                                        </div>
                                    </div>";
                            }
                            
			echo"<th>Company Name</th><th>Comapny Supervisor Name</th><th>City</th><th>Address</th><th>Mobile Number</th><th>Email</th><th>Starting Date</th><th>pre agreed price(per Quintal(100kg))</th><th>Duration</th><th></th><th></th></tr></thead>";

       while($data1 = mysqli_fetch_assoc($rs)) {
        $c_id=$data1["c_id"];
           $qry1="select * from company where c_id ='$c_id'";
           $rs1=mysqli_query($con,$qry1);
          $row1=mysqli_fetch_assoc($rs1);
              $city=$row1["city"];
              $qry2="select * from city where c_id='$city'";
               $rs2=mysqli_query($con,$qry2);
                 $row2=mysqli_fetch_assoc($rs2);
         echo"<tbody><tr>";
					echo"<td style='vertical-align :middle;'>".$row1["companyname"]."</td>";
					echo"<td style='vertical-align :middle;'>".$row1["companysname"]."</td>";
					 echo"<td style='vertical-align :middle;'>".$row2["cityname"]."</td>";
					 echo"<td style='vertical-align :middle;'>".$row1["address"]."</td>";
					 echo"<td style='vertical-align :middle;'>".$row1["mobno"]."</td>";
					 echo"<td style='vertical-align :middle;'>".$row1["email"]."</td>";
              echo"<td style='vertical-align :middle;'>".substr($data1["sdate"], 8,2)."-".substr($data1["sdate"], 5,2)."-".substr($data1["sdate"], 0,4)."</td>";
					 echo"<td style='vertical-align :middle;'>".$data1["preagreedprice"]."</td>";
					 echo"<td style='vertical-align :middle;'>".$data1["message"]."</td>";	
				     echo"<td style='vertical-align :middle;'><a href='farmeracpt.php?f_id=".$_COOKIE["f_id"]."'>Accept</a></td>";
				      echo"<td style='vertical-align :middle;'><a href='farmerreqdel.php?f_id=".$_COOKIE["f_id"]."'>Reject</a>";
              if ($data1["notification"]==0) 
                      {
                             echo "<img src='image/giphy.gif' width='30px' height='50px'>";
                      }

              echo "</td>";
					 echo"</tbody></tr>";
    }
    echo"</table>";
     $sql="update acceptreq set notification=1 where f_id='$f_id'";
       $rs1=mysqli_query($con,$sql);
      
   
?>

<script>
   $(window).bind("load",function(){
       
      
        $("#companyid").text('0');
   });

</script>
<?php
      include("footer.php");
?>