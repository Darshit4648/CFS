<?php
          include("connect.php");
        session_start();


        $captcha_code=$_SESSION["captcha_code"];
        $captcha=$_POST["txtcaptcha"];
        $fname=$_POST["txtfname"];
        $city=$_POST["txtfcity"];
        $latitude=$_POST["lat"];
        $longitude=$_POST["long"];
        $farmarea=$_POST["txtfarmarea"];
       // $cprice=$_POST["txtcontractprice"];
        $surveyno=$_POST["txtsurveyno"];
        $mobno=$_POST["txtmobno"];
        $cropname=$_POST["txtcname"];
        $harprice=$_POST["txtharprice"];
        $uname=$_POST["txtuname"];
        $password=$_POST["txtpassword"];
        $taluka=$_POST["txttaluka"];
        $village=$_POST["txtvillage"];

       
        if($captcha == $captcha_code)
        {
         $qry="insert into farmer(fname,city,taluka,village,latitude,longitude,farmarea,surveyno,mobno,cropname,harvestingprice,uname,password)values('$fname','$city','$taluka','$village','$latitude','$longitude','$farmarea','$surveyno','$mobno','$cropname','$harprice','$uname','$password')";

          if (mysqli_query($con, $qry)) {
               echo "New record created successfully";
               header("location:login.php?errrr=1");
            } else {
               echo "Error: " . $qry . "" . mysqli_error($con);
            }
          }
          else
          {
                  header("location:FarmerReg.php?er=1"); 
          }
?>