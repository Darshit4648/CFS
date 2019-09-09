<?php
       include("connect.php");

       $c_id=$_GET["c_id"];

       $sql="update acceptreq set respondstatus='2' where c_id='$c_id'";
       $rs=mysqli_query($con,$sql);
       echo $sql;
       header("location:Farmeracceptreq.php");
?>