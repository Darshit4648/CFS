<?php
       include("connect.php");

       $f_id=$_GET["f_id"];

       $sql="update extramaterial set respondstatus='2' where f_id='$f_id'";
       $rs=mysqli_query($con,$sql);
       echo $sql;
       header("location:ExtraRawmaterialacpt.php");
?>