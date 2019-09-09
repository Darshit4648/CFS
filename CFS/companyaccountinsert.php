<?php
       include("connect.php");

       $c_id=$_COOKIE["c_id"];
       $f_id=$_POST["txtfarmer"];
       $total=$_POST["txttotprice"];
       $prof=$_POST["txtpro"];
       $loss=$_POST["txtlos"];

       if(isset($prof))
       {
       $qry="insert into companyaccount (c_id,f_id,total,profit) values('$c_id','$f_id','$total','$prof')";
   }
   else
   {
           $qry="insert into companyaccount (c_id,f_id,total,loss) values('$c_id','$f_id','$total','$loss')";
   }
        if (mysqli_query($con, $qry)) {
               //echo "New record created successfully";
              header("location:companyaccount.php?errr=1");
            } else {
               echo "Error: " . $qry . "" . mysqli_error($con);
            }
   
?>