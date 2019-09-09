<?php
      include("connect.php");
       
      $c_id=$_COOKIE["c_id"]; 
     $f_id=$_POST["txtfid"];
      $materialtype=$_POST["txtmtype"];
      $materialname=$_POST["txtmname"];
      $quantity=$_POST["txtquant"];
      $unitprice=$_POST["txtuprice"];
      $totalprice=$_POST["txttotprice"];
      date_default_timezone_set('Asia/Kolkata');
       $time=date( 'd/m/Y h:i:s', time ());
        
     // echo $materialtype;  
      $qry="insert into rawmaterial (c_id,f_id,materialtype,materialname,quantity,unitprice,totprice,created_at) values('$c_id','$f_id','$materialtype','$materialname','$quantity','$unitprice','$totalprice','$time')";
      //echo $qry;

       if (mysqli_query($con, $qry)) {
               //echo "New record created successfully";
              header("location:Rawmaterial.php?errr=1");
            } else {
               echo "Error: " . $qry . "" . mysqli_error($con);
            }
?>