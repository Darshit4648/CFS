<?php
      include ("connect.php");
      include("header.php");

      $fcity=$_COOKIE["city"];
       $city=$_COOKIE["city"];
 
       
          


      $qry="select * from farmer where city='$city' && status=0";
      $rs=mysqli_query($con,$qry);
      
      $qry1="select * from city where c_id='$city'";

      $rs1=mysqli_query($con,$qry1);
      $data=mysqli_fetch_assoc($rs1);
         $data["cityname"];
       
      echo "<h3 class='col-md-offset-4'>Farm Requests For Contract Farming</h3>";
      echo"<table class='table table-striped'>";
			echo"<thead><tr>";
			echo"<th>Farmer Name</th><th>City</th><th>Farm Area(in Hector)</th><th>Survey No</th><th>Crop Name</th><th>Mobile No</th><th>Harvesting Price</th></tr></thead>";
       while($row = mysqli_fetch_assoc($rs)) {
        $qry1="select * from city where c_id='$city'";
          //echo $qry1;
          $rs1=mysqli_query($con,$qry1);
          $data=mysqli_fetch_assoc($rs1);
          
          echo"<tbody><tr>";
					echo"<td style='vertical-align :middle;'>".$row["fname"]."</td>";
					echo"<td style='vertical-align :middle;'>".$data["cityname"]."</td>";
					echo"<td style='vertical-align :middle;'>".$row["farmarea"]."</td>";
					echo"<td style='vertical-align :middle;'>".$row["surveyno"]."</td>";
					echo"<td style='vertical-align :middle;'>".$row["cropname"]."</td>";
					echo"<td style='vertical-align :middle;'>".$row["mobno"]."</td>";
					echo"<td style='vertical-align :middle;'>".$row["harvestingprice"]."</td>";
          

						
						echo"<td style='vertical-align :middle;'><a href='companyans.php?f_id=".$row['f_id']."'>Accept</a></td>";
              echo"<td style='vertical-align :middle;'><a href='farmrerej.php?f_id=".$row['f_id']."'>Reject</a>";
              if ($row["fa_notification"]==0) {
                echo "<img src='image/giphy.gif' width='30px' height='50px'>";
              }
              echo "</td>";

					 echo"</tbody></tr>";
    }
    echo"</table>";
    $sql="update farmer set fa_notification=1 where city='$city'";
       $rs1=mysqli_query($con,$sql); 
?>
<script>
   $(window).bind("load",function(){
        $("#count2").text('0');
   });

</script>

<?php
   include("footer.php");
?>