<?php
       include("connect.php");

       $f1_id=$_GET["f_id"];
     
       $sql="update acceptreq set respondstatus='2' where f_id='$f1_id'";
       $rs=mysqli_query($con,$sql);
       echo $sql;
       header("location:Farmeracceptreq.php");
?>