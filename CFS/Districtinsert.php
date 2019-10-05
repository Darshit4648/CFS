<?php
      include("connect.php");

      $dis=$_POST["txtdistrict"];
      $qry="insert into city (cityname) values('$dis')";

       if (mysqli_query($con, $qry)) {
               //echo "New record created successfully";
              header("location:District.php?errr=1");
            } else {
               echo "Error: " . $qry . "" . mysqli_error($con);
            }
?>