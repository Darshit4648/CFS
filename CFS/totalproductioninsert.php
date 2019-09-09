<?php
     include("connect.php");

     $c_id=$_POST["txtcid"];
      $f_id=$_COOKIE["f_id"];
      $totpro=$_POST["txttotpro"];
       date_default_timezone_set('Asia/Kolkata');
       $time=date( 'd/m/Y h:i:s', time ());

       $qry="insert into totalproduction (f_id,c_id,totalproduction,created_at) values ('$f_id','$c_id','$totpro','$time')";
        if (mysqli_query($con, $qry)) {
               //echo "New record created successfully";
              header("location:totalproduction.php?errr=1");
            } else {
               echo "Error: " . $qry . "" . mysqli_error($con);
            }



?>