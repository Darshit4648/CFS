<?php
       include("connect.php");
       include("header.php");

      $sql = "SELECT * FROM farmer INNER JOIN 	acceptreq ON acceptreq.f_id = farmer.f_id INNER JOIN company ON company.c_id=acceptreq.c_id where acceptreq.respondstatus=1 && acceptreq.notification=1";   

       $rs=mysqli_query($con,$sql);

       echo"<table class='table table-hover'>";
			echo"<thead><tr>";
			 echo "<h3 class='col-md-offset-5'>Agreement Details</h3>";
			echo"<th>Farmer Name</th><th>Company Name</th><th>Comapny Supervisor Name</th><th>preagreedprice(per Quintal)</th><th>Duration</th><th>Contract accepted date and time</th></thead>";

       while($data = mysqli_fetch_assoc($rs)) {
            
         echo"<tbody><tr>";
					echo"<td style='vertical-align :middle;'>".$data["fname"]."</td>";
					echo"<td style='vertical-align :middle;'>".$data["companyname"]."</td>";
					 echo"<td style='vertical-align :middle;'>".$data["companysname"]."</td>";
					 echo"<td style='vertical-align :middle;'>".$data["preagreedprice"]."</td>";
					 echo"<td style='vertical-align :middle;'>".$data["message"]."</td>";
					 echo"<td style='vertical-align :middle;'>".$data["updated_at"]."</td>";
				     echo"<td style='vertical-align :middle;'><a href='agreement1.php?f_id=".$data['f_id']."&c_id=".$data['c_id']."&ac_id=".$data['ac_id']."'>Agreement</a></td>";
				    
					 echo"</tbody></tr>";
    }
    echo"</table>";
?>
<script>
   $(window).bind("load",function(){
       
      
        $("#agreeid").text('0');
   });
</script>
<?php
      include("footer.php");
?>