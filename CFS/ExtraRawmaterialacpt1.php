<?php
      include("connect.php");
      $c_id=$_COOKIE["c_id"];
      $f_id=$_GET["f_id"];
       echo $f_id; 
       $qry="update extramaterial set respondstatus='1' where f_id= '$f_id'";
       $rs=mysqli_query($con,$qry);

       header("location:ExtraRawmaterialacpt.php?errr=1");
?>