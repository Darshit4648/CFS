<?php
       include("connect.php");

       $c_id=$_COOKIE["c_id"];
       $f_id=$_POST["txtfarmer"];
       $total=$_POST["txttotprice"];
      $date=$_POST["txtdate"];
       $qry="insert into farmsalary (f_id,c_id,date,totincome) values('$f_id','$c_id','$date','$total')";
        if (mysqli_query($con, $qry)) {
               //echo "New record created successfully";
              header("location:farmsalary.php?errr=1");
            } else {
               echo "Error: " . $qry . "" . mysqli_error($con);
            }
?>