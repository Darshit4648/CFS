<?php
      include("connect.php");

      $uname=$_POST["txtuname"];
       $npwd=$_POST["txtnpwd"];
        $cpwd=$_POST["txtcpwd"];

        if($uname=='admin121')
        {
        	$qry="update admin set password=$cpwd where Uname='$uname'";
        	mysqli_query($con,$qry);
            header("location:adminpwd.php?errr=1");	
        }
        else
        {
        	  header("location:adminpwd.php?err=1");	
        }
?>