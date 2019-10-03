<?php
      include("connect.php");

       $f_id=$_COOKIE["f_id"]; 
     	$c_id=$_POST["txtcid"];
      $materialtype=$_POST["txtmtype"];
      $date=$_POST["txtdate"];
      $materialname=$_POST["txtmname"];
      $quantity=$_POST["txtquant"];
      $unitprice=$_POST["txtquantprice"];
      $totalprice=$_POST["txtquanttotprice"];
        
     // echo $materialtype;  
      $qry="insert into extramaterial (f_id,c_id,date,materialtype,materialname,quantity,unitprice,totalprice) values('$f_id','$c_id','$date','$materialtype','$materialname','$quantity','$unitprice','$totalprice')";
      echo $qry;

       if (mysqli_query($con, $qry)) {
               echo "New record created successfully";
              header("location:ExtraRawmaterial.php?errr=1");
            } else {
               echo "Error: " . $qry . "" . mysqli_error($con);
            }
?>