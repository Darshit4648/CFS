<?php
     include("connect.php");
     include("header.php");

     $c_id=$_COOKIE["c_id"];

     $qry="select * from extramaterial where c_id='$c_id' && respondstatus=0";
     $rs=mysqli_query($con,$qry);
      
    
       echo"<table table border=1 class='table table-bordered table-hover table-responsive'>";
       echo "<h3 class='col-md-offset-4'>Extra Raw Materials Requests</h3>";
        if(isset($_GET["errr"]))
                            {
                                echo"<div class='col-md-4 col-md-offset-4	'>
                                        <div class='form-group'>
                                            <div class='alert alert-success alert-dismissable fade in'>
                                                <a href='#' class='close' data-dismiss='alert'>&times;</a>
                                                      you are accepted famrer extramaterial request.
                                                      </div>
                                        </div>
                                    </div>";
                            }
			echo"<thead><tr>";
			echo"<th>Farmer Name</th><th>Material Type</th><th>Material Name</th><th>Quantity(per Bag)</th><th>Date</th><th></th><th></th></thead>";

       while($data1 = mysqli_fetch_assoc($rs)) {
       	         $f_id=$data1["f_id"];
       	         $qry1="select * from farmer where f_id='$f_id'";
                 $rs1=mysqli_query($con,$qry1);
                 $data2=mysqli_fetch_assoc($rs1);

         echo"<tbody><tr>";
					echo"<td style='vertical-align :middle;'>".$data2["fname"]."</td>";
					echo"<td style='vertical-align :middle;'>".$data1["materialtype"]."</td>";
					 echo"<td style='vertical-align :middle;'>".$data1["materialname"]."</td>";
					 echo"<td style='vertical-align :middle;'>".$data1["quantity"]."</td>";
					 echo"<td style='vertical-align :middle;'>".substr($data1["date"], 8,2)."-".substr($data1["date"], 5,2)."-".substr($data1["date"], 0,4)."</td>";
				     echo"<td style='vertical-align :middle;'><a href='ExtraRawmaterialacpt1.php?em_id=".$data1['em_id']."'>Accept</a></td>";
				      echo"<td style='vertical-align :middle;'><a href='Extramaterialrej.php?em_id=".$data1['em_id']."'>Reject</a>";
                      if ($data1["em_notification"]==0) 
                      {
                             echo "<img src='image/giphy.gif' width='30px' height='50px'>";
                      }
              echo"</td>";

             
					 echo"</tbody></tr>";
    }
    echo"</table>";    

     $sql="update extramaterial set em_notification=1 where c_id='$c_id'"; 
     $rs1=mysqli_query($con,$sql);
 
?>

<script>
   $(window).bind("load",function(){
       
      
        $("#emrawid").text('0');
   });

</script>
 
<?php
     include("footer.php");
?>


