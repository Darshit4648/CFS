<?php
       include("connect.php");

       $em_id=$_GET["em_id"];

       $sql="update extramaterial set respondstatus='2' where em_id='$em_id'";
       $rs=mysqli_query($con,$sql);
       header("location:ExtraRawmaterialacpt.php");
?>