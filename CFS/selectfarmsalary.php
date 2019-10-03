<?php
         include("header.php");
         include("connect.php");
         $f_id=$_COOKIE["f_id"];

         $qry="SELECT farmer.fname,farmsalary.totincome,farmsalary.date,farmsalary.f_notification FROM farmer INNER JOIN 	farmsalary ON farmsalary.f_id = farmer.f_id  where farmsalary.f_id='$f_id' && farmsalary.status=0";
         $rs=mysqli_query($con,$qry);

         

         echo"<table class='table table-striped'>";
    echo "<h3 class='col-md-offset-5'>Farm income</h3>";
          
			echo"<thead><tr>";
			echo"<th>Company Name</th><th>Farmer Name</th><th>Total income</th><th>Date</th></thead>";
     while($data1=mysqli_fetch_assoc($rs))
{            
              $qry1="select * from acceptreq where f_id='$f_id'";
         $rs1=mysqli_query($con,$qry1);
         $data2=mysqli_fetch_assoc($rs1);
              $c_id=$data2["c_id"];
             $qry3="select * from company where c_id='$c_id'";
             $rs2=mysqli_query($con,$qry3);
             $data3=mysqli_fetch_assoc($rs2);
            echo"<tbody><tr>";
                    echo"<td style='vertical-align :middle;'>".$data3["companyname"]."</td>";
					echo"<td style='vertical-align :middle;'>".$data1["fname"]."</td>";
					echo"<td style='vertical-align :middle;'>".$data1["totincome"]."</td>";
					 echo"<td style='vertical-align :middle;'>".substr($data1["date"], 8,2)."-".substr($data1["date"], 5,2)."-".substr($data1["date"], 0,4)."</td>";
					 echo"<td style='vertical-align :middle;'><a href='farmsalaryacpt.php?'>Accept</a></td>";
				      echo"<td style='vertical-align :middle;'><a href='farmsalaryrej.php'>Reject</a>";
                        if ($data1["f_notification"]==0) 
                      {
                             echo "<img src='image/giphy.gif' width='30px' height='50px'>";
                      }
                      echo "</td>";
					 echo"</tbody></tr>";
      }      
      echo "</table>";

      $qry4="update farmsalary set  f_notification=1 where f_id='$f_id'";
      $ab=mysqli_query($con,$qry4);
   
?>
<script>
   $(window).bind("load",function(){
       
      
        $("#fsalary").text('0');
   });

</script>
<?php
    include("footer.php");
?>