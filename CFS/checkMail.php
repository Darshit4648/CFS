<?php
    include("connect.php");

    $email=$_GET["email"];

    $sql="select * from company where email='$email'";
    $rs=mysqli_query($con,$sql);
    $row=mysqli_num_rows($rs);

    if($row>0)
    {
    	echo "email address is already exist";
    }

?>