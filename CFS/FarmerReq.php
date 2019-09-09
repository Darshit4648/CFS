<?php
      include ("connect.php");
      include("header.php");

      $fcity=$_COOKIE["city"];
     //s echo $fcity;
      $qry="select * from farmer where city='$fcity' && status=0";
      $rs=mysqli_query($con,$qry);
      echo "<h3 class='col-md-offset-4'>Farm Requests For Contract Farming</h3>";
      echo"<table class='table table-striped'>";
			echo"<thead><tr>";
			echo"<th>Farmer Name</th><th>City</th><th>Farm Area(in Hector)</th><th>Survey No</th><th>Crop Name</th><th>Mobile No</th><th>Harvesting Price</th></tr></thead>";
       while($row = mysqli_fetch_assoc($rs)) {
         echo"<tbody><tr>";
					echo"<td>".$row["fname"]."</td>";
					echo"<td>".$row["city"]."</td>";
					echo"<td>".$row["farmarea"]."</td>";
					echo"<td>".$row["surveyno"]."</td>";
					echo"<td>".$row["cropname"]."</td>";
					echo"<td>".$row["mobno"]."</td>";
					echo"<td>".$row["harvestingprice"]."</td>";
						
						echo"<td><a href='companyans.php?f_id=".$row['f_id']."'>Accept</a></td>";
					 echo"</tbody></tr>";
    }
    echo"</table>";
?>
<?php
   include("footer.php");
?>