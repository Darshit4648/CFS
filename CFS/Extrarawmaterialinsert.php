<?php
      include("connect.php");

       $f_id=$_COOKIE["f_id"]; 
     	$c_id=$_POST["txtcid"];
      $materialtype=$_POST["txtmtype"];
      $date=$_POST["txtdate"];
      $materialname=$_POST["txtmname"];
      $quantity=$_POST["txtquant"];
        
     // echo $materialtype;  
      $qry="insert into extramaterial (f_id,c_id,date,materialtype,materialname,quantity) values('$f_id','$c_id','$date','$materialtype','$materialname','$quantity')";
      echo $qry;

       if (mysqli_query($con, $qry)) {
               echo "New record created successfully";
              header("location:ExtraRawmaterial.php?errr=1");
            } else {
               echo "Error: " . $qry . "" . mysqli_error($con);
            }
?>