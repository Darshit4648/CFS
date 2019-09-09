<?php
      include("connect.php");
      
       $c_id=$_COOKIE["c_id"];
      $cname=$_POST["txtcname"];
      $city=$_POST["txtcity"];
      $address=$_POST["txtaddress"];
      $mobno=$_POST["txtmobno"];
      $email=$_POST["txtemail"];
      $uname=$_POST["txtuname"];
    

      $qry="update company set companysname='$cname' , city='$city', address='$address' , mobno='$mobno' , email='$email' , username='$uname' where c_id='$c_id'";
      $rs=mysqli_query($con,$qry);

       echo $qry;

       if (mysqli_query($con, $qry)) {
               echo "Record successfully updated ";
              header("location:companyupdate.php?errr=1");
            } else {
               echo "Error: " . $qry . "" . mysqli_error($con);
            }
?>