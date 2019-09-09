<?php
     include("connect.php");

      $f_id=$_COOKIE["f_id"]; 
     	$c_id=$_POST["txtcid"];
      $Date=$_POST["txtdate"];
      $nolabour=$_POST["txtnolabour"];
      $lcharge=$_POST["txtlcharge"];
      $totlcharge=$_POST["txttotcharge"];
        
     // echo $materialtype;  
      $qry="insert into labourcharge (f_id,c_id,date,nolabour,labourcharge,totcharge) values('$f_id','$c_id','$Date','$nolabour','$lcharge','$totlcharge')";
      echo $qry;

       if (mysqli_query($con, $qry)) {
               echo "New record created successfully";
              header("location:Labourcharge.php?errr=1");
            } else {
               echo "Error: " . $qry . "" . mysqli_error($con);
            }
?>