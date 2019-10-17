<?php
    include("connect.php");

    $uname=$_GET["uname"];

    $sql="select * from company where username='$uname'";
    $rs=mysqli_query($con,$sql);
    $row=mysqli_num_rows($rs);

    if($row>0)
    {
    	echo "Username is already exist";
    }

?>