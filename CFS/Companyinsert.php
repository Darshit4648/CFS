<?php
          include("connect.php");

        $cname=$_POST["txtcname"];
        $sname=$_POST["txtsname"];
        $city=$_POST["txtcity"];
        $latitude=$_POST["lat"];
        $longitude=$_POST["long"];
        $address=$_POST["txtaddress"];
        $mobno=$_POST["txtmobno"];
        $email=$_POST["txtemail"];
        $username=$_POST["txtusername"];
        $password=$_POST["txtpassword"];
        
        //echo $latitude;
           //echo $latitude;

         $qry="insert into company(companyname,companysname,city,latitude,longitude,address,mobno,email,username,password)values('$cname','$sname','$city','$latitude','$longitude','$address','$mobno','$email','$username','$password')";

          if (mysqli_query($con, $qry)) {
               echo "New record created successfully";
               header("location:login.php?errrr=1");
            } else {
               echo "Error: " . $qry . "" . mysqli_error($con);
            }
?>