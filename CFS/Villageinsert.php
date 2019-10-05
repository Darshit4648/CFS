<?php
      include("connect.php");

     // $dis=$_POST["txtdis"];
       $taluka=$_POST["txttaluka"];
           $village=$_POST["txtvillage"];
      $qry="insert into villages (t_id,villagename) values ('$taluka','$village')";

       if (mysqli_query($con, $qry)) {
               //echo "New record created successfully";
              header("location:village.php?errr=1");
            } else {
               echo "Error: " . $qry . "" . mysqli_error($con);
            }
?>