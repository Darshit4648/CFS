<?php
       include("connect.php");
       include("header.php");

       // $f_id=$_COOKIE["f_id"];
       // echo $f_id; 
       echo $rm_id=$_GET["rm_id"];
       $qry="update rawmaterial set status='1' where rm_id= '$rm_id'";
       $rs=mysqli_query($con,$qry);
       date_default_timezone_set('Asia/Kolkata');
       $time=date( 'd/m/Y h:i:s', time ());
       echo $time;
       $qry1="update rawmaterial set updated_at='$time' where rm_id= '$rm_id'";
       $rs1=mysqli_query($con,$qry1);
       header("location:selectrawmaterial.php?errr=1");
?>

<?php
      include("footer.php");
?>