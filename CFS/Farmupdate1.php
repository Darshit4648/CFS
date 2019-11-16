<?php
      include("connect.php");
      
       $f_id=$_COOKIE["f_id"];
      $fname=$_POST["txtfname"];
      $city=$_POST["txtfcity"];
      $mobno=$_POST["txtfmobno"];
      $uname=$_POST["txtfuname"];
     
      $qry="update farmer set fname='$fname' , city='$city', mobno='$mobno' , uname='$uname'  where f_id='$f_id'";
      $rs=mysqli_query($con,$qry);

       

       if (mysqli_query($con, $qry)) {
               echo "Record successfully updated ";
              header("location:farmerupdate.php?errr=1");
            } else {
               echo "Error: " . $qry . "" . mysqli_error($con);
            }
?>