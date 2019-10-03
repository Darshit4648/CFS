<?php
      include("connect.php");
      include("header.php");

     // $c_id=$_COOKIE["c_id"];
      $f_id=$_COOKIE["f_id"];
 
 		$qry="select * from rawmaterial where f_id='$f_id' && status=0";
    	  $rs=mysqli_query($con,$qry);

 
 echo"<table border=1 class='table table-bordered table-hover'>";
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
			echo"<th>material Type</th><th>material Name</th><th>Quantity(per Bag())</th><th></th><th></th></thead>";
     while($data=mysqli_fetch_assoc($rs))
{
            echo"<tbody><tr>";
					echo"<td style='vertical-align :middle;'>".$data["materialtype"]."</td>";
					echo"<td style='vertical-align :middle;'>".$data["materialname"]."</td>";
					 echo"<td style='vertical-align :middle;'>".$data["quantity"]."</td>";
					
					 echo"<td style='vertical-align :middle;'><a href='Rawmaterialcpt.php?rm_id=".$data['rm_id']."'>Accept</a></td>";
				      echo"<td style='vertical-align :middle;'><a href='Rejectrawmaterial.php?rm_id=".$data['rm_id']."'>Reject</a>";
                   if ($data["ma_notification"]==0) 
                      {
                            echo "<img src='image/giphy.gif' width='30px' height='50px'>";
                      }

              echo "</td>";
					 echo"</tbody></tr>";
      }      
      echo "</table>";

      $sql="update rawmaterial set ma_notification=1 where f_id='$f_id'";  
     $rs1=mysqli_query($con,$sql);
   
?>
<script>
   $(window).bind("load",function(){
       
      
        $("#rawid").text('0');
   });

</script>
<?php
          include("footer.php");
?>
