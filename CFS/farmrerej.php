<?php
    include("connect.php");

    $f_id=$_GET["f_id"];

    $sql="update farmer set status=2 where f_id=$f_id";
    $rs=mysqli_query($con,$sql);

    header("location:FarmerReq.php?err=1");
?>