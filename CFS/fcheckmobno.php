<?php
    include("connect.php");

    $fmobno=$_GET["mobno"];

    $sql="select * from farmer where mobno='$fmobno'";
    $rs=mysqli_query($con,$sql);
    $row=mysqli_num_rows($rs);

    if($row>0)
    {
    	echo "Moblie Numbers is already exist";
    }

?>