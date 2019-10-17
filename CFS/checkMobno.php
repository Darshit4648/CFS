<?php
    include("connect.php");

    $mobno=$_GET["mobno"];

    $sql="select * from company where mobno='$mobno'";
    $rs=mysqli_query($con,$sql);
    $row=mysqli_num_rows($rs);

    if($row>0)
    {
    	echo "Mobile Numbers  is already exist";
    }

?>