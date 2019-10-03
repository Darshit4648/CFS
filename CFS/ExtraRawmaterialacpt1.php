<?php
      include("connect.php");
      $c_id=$_COOKIE["c_id"];
      $em_id=$_GET["em_id"];

       $qry="update extramaterial set respondstatus='1' where em_id= '$em_id'";
       $rs=mysqli_query($con,$qry);

       header("location:ExtraRawmaterialacpt.php?errr=1");
?>