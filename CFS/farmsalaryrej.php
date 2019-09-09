<?php
     include("connect.php");
     $f_id=$_COOKIE["f_id"];

     $qry="update farmsalary set status=2 where f_id='$f_id'";
     $rs=mysqli_query($con,$qry);

     header("location:selectfarmsalary.php");
?>