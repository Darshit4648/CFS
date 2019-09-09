<?php
       include("connect.php");
       include("header.php");

       $f_id=$_COOKIE["f_id"];
       echo $f_id; 
       $qry="update farmsalary set status='1' where f_id= '$f_id'";
       $rs=mysqli_query($con,$qry);
       date_default_timezone_set('Asia/Kolkata');
       $time=date( 'd/m/Y h:i:s', time ());
       echo $time;
       $qry1="update farmsalary set updated_at='$time' where f_id= '$f_id'";
       $rs1=mysqli_query($con,$qry1);
       header("location:selectfarmsalary.php?errr=1");
       
?>

<?php
      include("footer.php");
?>