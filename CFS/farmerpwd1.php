<?php
      include("connect.php");

      $funame=$_POST["txtfuname"];
       $fnpwd=$_POST["txtfnpwd"];
        $fcpwd=$_POST["txtfcpwd"];

        $qry1="select * from farmer where uname='$funame'";
        $rs=mysqli_query($con,$qry1);
        $row=mysqli_fetch_assoc($rs);
         echo $fname=$row["uname"];


        if($funame==$fname)
        {
        	$qry="update farmer set password=$fcpwd where uname='$funame'";
        	mysqli_query($con,$qry);
            header("location:farmerpwd.php?errr=1");	
        }
        else
        {
        	  header("location:farmerpwd.php?err=1");	
        }
?>