<?php
          include("connect.php");

        $fname=$_POST["txtfname"];
        $city=$_POST["txtcity"];
        $latitude=$_POST["lat"];
        $longitude=$_POST["long"];
        $farmarea=$_POST["txtfarmarea"];
        $cprice=$_POST["txtcontractprice"];
        $surveyno=$_POST["txtsurveyno"];
        $mobno=$_POST["txtmobno"];
        $cropname=$_POST["txtcname"];
        $harprice=$_POST["txtharprice"];
        $uname=$_POST["txtuname"];
        $password=$_POST["txtpassword"];

       

         $qry="insert into farmer(fname,city,latitude,longitude,farmarea,surveyno,mobno,cropname,harvestingprice,uname,password)values('$fname','$city','$latitude','$longitude','$farmarea','$surveyno','$mobno','$cropname','$harprice','$uname','$password')";

          if (mysqli_query($con, $qry)) {
               echo "New record created successfully";
               header("location:login.php?errrr=1");
            } else {
               echo "Error: " . $qry . "" . mysqli_error($con);
            }
?>