<?php
      include("connect.php");

      $uname=$_POST["txtcuname"];
       $npwd=$_POST["txtcnpwd"];
        $cpwd=$_POST["txtcocpwd"];

        if($uname=='admin')
        {
        	$qry="update company set password=$cpwd where username='$uname'";
        	mysqli_query($con,$qry);
            header("location:adminpwd.php?errr=1");	
        }
        else
        {
        	  header("location:adminpwd.php?err=1");	
        }
?>