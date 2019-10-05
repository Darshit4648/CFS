<?php
      include("connect.php");

      $dis=$_POST["txtdis"];
       $taluka=$_POST["txttaluka"];
      $qry="insert into taluka (c_id,talukaname) values('$dis','$taluka')";

       if (mysqli_query($con, $qry)) {
               //echo "New record created successfully";
              header("location:Taluka.php?errr=1");
            } else {
               echo "Error: " . $qry . "" . mysqli_error($con);
            }
?>