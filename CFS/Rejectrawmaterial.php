<?php

       include("connect.php");

       $rm_id=$_GET["rm_id"];

       $sql="update rawmaterial set status='2' where rm_id='$rm_id'";
       $rs=mysqli_query($con,$sql);
       
       header("location:selectrawmaterial.php");

?>