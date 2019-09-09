<?php
      include("connect.php");

     echo  $f_id=$_POST["txtfid"];
       $c_id=$_COOKIE["c_id"];
      $agprice=$_POST["txtagprice"];
      $message=$_POST["txtmessage"];
      $sdate=$_POST["txtsdate"];

      $qry="insert into acceptreq (f_id,c_id,sdate,preagreedprice,message) values ('$f_id','$c_id','$sdate','$agprice','$message')";
      if(mysqli_query($con,$qry))
      {
      	  header("location:companyans.php?err=1");
      }
      else {
               echo "Error: " . $qry . "" . mysqli_error($con);
            }

      $qry1="update farmer set status=1 where f_id='$f_id'";
      $rs=mysqli_query($con,$qry1);      

?>