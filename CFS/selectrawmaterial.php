<?php
      include("connect.php");
      include("header.php");

     // $c_id=$_COOKIE["c_id"];
      $f_id=$_COOKIE["f_id"];
     // echo $c_id;
      //echo $f_id;
 		$qry="select * from rawmaterial where f_id='$f_id' && status=0";
     //  echo $qry;
    	  $rs=mysqli_query($con,$qry);
 
 echo"<table class='table table-striped'>";
    echo "<h3 class='col-md-offset-5'>Raw Materials</h3>";
    if(isset($_GET["errr"]))
                            {
                                echo"<div class='col-md-4 col-md-offset-4 '>
                                        <div class='form-group'>
                                            <div class='alert alert-success alert-dismissable fade in'>
                                                <a href='#' class='close' data-dismiss='alert'>&times;</a>
                                                      You are accepted company Raw materials.
                                                      </div>
                                        </div>
                                    </div>";
                            }	
          
			echo"<thead><tr>";
			echo"<th>material Type</th><th>material Name</th><th>Quantity(per Bag())</th></thead>";
     while($data=mysqli_fetch_assoc($rs))
{
            echo"<tbody><tr>";
					echo"<td>".$data["materialtype"]."</td>";
					echo"<td>".$data["materialname"]."</td>";
					 echo"<td>".$data["quantity"]."</td>";
					
					 echo"<td><a href='Rawmaterialcpt.php?rm_id=".$data['rm_id']."'>Accept</a></td>";
				      echo"<td><a href='Rejectrawmaterial.php?rm_id=".$data['rm_id']."'>Reject</a></td>";
					 echo"</tbody></tr>";
      }      
      echo "</table>";
   
?>
<?php
          include("footer.php");
?>
