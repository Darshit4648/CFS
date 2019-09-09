<?php
     include("connect.php");
     $f_id=$_POST["txtfid"];
     $c_id=$_COOKIE["c_id"];
     $dist=$_POST["txtdist"];
     $taprice=$_POST["txttprice"];
      $totprice=$_POST["txttotprice"];

      $qry="insert into  transportcharges (f_id,c_id,distance,price,totaltransportprice) values('$f_id','$c_id','$dist','$taprice','$totprice')";
      echo $qry;
      if (mysqli_query($con, $qry)) {
               //echo "New record created successfully";
              header("location:transportcharges.php?errr=1");
            } else {
               echo "Error: " . $qry . "" . mysqli_error($con);
            }
?>