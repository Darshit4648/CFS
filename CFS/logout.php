<?php

      include("connect.php");

      setcookie("uname","$unm",time()-1);
	  setcookie("username","$unm1",time()-1);
	  setcookie("fname","$fname",time()-1);
	  setcookie("Uname","$Uname",time()-1);
	  setcookie("companysname","$cname",time()-1);
     	
	if(isset($_COOKIE["uname"]))
	{
		header("location:login.php?var=1");
	}
	 if(isset($_COOKIE["username"]))
	{
	
		header("location:login.php?var=1");
	}
	elseif(isset($_COOKIE["Uname"]))
	{
		header("location:login.php?var=1");
	}


?>