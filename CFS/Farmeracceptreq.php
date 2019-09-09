<?php

    include("connect.php");
    include("header.php");

     $f_id=$_COOKIE["f_id"];
    
      $city=$_COOKIE["city"];
      
       
      $qry="select * from acceptreq where f_id ='$f_id' && respondstatus=0";
       $rs=mysqli_query($con,$qry);
       $count=mysqli_num_rows($rs);
       
      
                        
       echo"<table class='table table-condensed'>";
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
                            
			echo"<th>Company Name</th><th>Comapny Supervisor Name</th><th>City</th><th>Address</th><th>Mobile Number</th><th>Email</th><th>Starting Date</th><th>pre agreed price(per Quintal(100kg))</th><th>Duration</th></tr></thead>";

       while($data1 = mysqli_fetch_assoc($rs)) {
        $c_id=$data1["c_id"];
           $qry1="select * from company where c_id ='$c_id'";
           $rs1=mysqli_query($con,$qry1);
          $row1=mysqli_fetch_assoc($rs1);
         echo"<tbody><tr>";
					echo"<td>".$row1["companyname"]."</td>";
					echo"<td>".$row1["companysname"]."</td>";
					 echo"<td>".$row1["city"]."</td>";
					 echo"<td>".$row1["address"]."</td>";
					 echo"<td>".$row1["mobno"]."</td>";
					 echo"<td>".$row1["email"]."</td>";
              echo"<td>".substr($data1["sdate"], 8,2)."-".substr($data1["sdate"], 5,2)."-".substr($data1["sdate"], 0,4)."</td>";
					 echo"<td>".$data1["preagreedprice"]."</td>";
					 echo"<td>".$data1["message"]."</td>";	
				     echo"<td><a href='farmeracpt.php?c_id=".$row1['c_id']."''>Accept</a></td>";
				      echo"<td><a href='farmerreqdel.php?c_id=".$row1['c_id']."'>Reject</a></td>";
					 echo"</tbody></tr>";
    }
    echo"</table>";
   
?>
<?php
      include("footer.php");
?>