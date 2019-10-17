<?php
    include("connect.php");

    $funame=$_GET["funame"];

    $sql="select * from farmer where uname='$funame'";
    $rs=mysqli_query($con,$sql);
    $row=mysqli_num_rows($rs);

    if($row>0)
    {
    	echo "Username is already exist";
    }

?>