<?php
       include("connect.php");
       include("header.php");

      $sql = "SELECT * FROM farmer INNER JOIN 	acceptreq ON acceptreq.f_id = farmer.f_id INNER JOIN company ON company.c_id=acceptreq.c_id where acceptreq.respondstatus=1 && acceptreq.notification=0";   

       $rs=mysqli_query($con,$sql);

       echo"<table class='table table-hover'>";
			echo"<thead><tr>";
			 echo "<h3 class='col-md-offset-5'>Agreement Details</h3>";
			echo"<th>Farmer Name</th><th>Company Name</th><th>Comapny Supervisor Name</th><th>preagreedprice(per Quintal)</th><th>Duration</th><th>Contract accepted date and time</th></thead>";

       while($data = mysqli_fetch_assoc($rs)) {
            
         echo"<tbody><tr>";
					echo"<td>".$data["fname"]."</td>";
					echo"<td>".$data["companyname"]."</td>";
					 echo"<td>".$data["companysname"]."</td>";
					 echo"<td>".$data["preagreedprice"]."</td>";
					 echo"<td>".$data["message"]."</td>";
					 echo"<td>".$data["updated_at"]."</td>";
				     echo"<td><a href='agreement1.php?f_id=".$data['f_id']."&c_id=".$data['c_id']."&ac_id=".$data['ac_id']."'>Agreement</a></td>";
				    
					 echo"</tbody></tr>";
    }
    echo"</table>";
?>

<?php
      include("footer.php");
?>