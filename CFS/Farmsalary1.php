<?php
include('connect.php');
$data = $_GET['datavalue'];
//$c_id=$_COOKIE["c_id"];
 $qry="select * from totalproduction where f_id='$data'";
 $rs=mysqli_query($con,$qry);

 // $qry1="select * from acceptreq where c_id='$c_id'";
 // $rs1=mysqli_query($con,$qry1);
 // $data=mysqli_fetch_assoc($rs1);
 //   echo $f_id=$data["f_id"];
 
$qry2="select * from acceptreq where f_id='$data'";
 $rs2=mysqli_query($con,$qry2);
 $data1=mysqli_fetch_assoc($rs2);
    $preprice=$data1["preagreedprice"];

  $totincome=0;
  while($row=mysqli_fetch_assoc($rs))
 {
 	$totincome=$preprice * $row['totalproduction'];
    echo "<div class='form-group'>";
	echo "<label>Total Production:</label>";
	echo "<input type='text' class='form-control'  name='txthprice' placeholder='Enter your Material Name' value='".$row['totalproduction']."' required readonly>";
	echo "</div>";
 }
 //echo $totincome;
  echo "<div class='form-group'>";
	echo "<label>Pre Agreed price:</label>";
	echo "<input type='text' class='form-control'  name='txttotprice' placeholder='Enter your Material Name' value='".$preprice."' required readonly>";
	echo "</div>";

 echo "<div class='form-group'>";
	echo "<label>Total farmer income:</label>";
	echo "<input type='text' class='form-control'  name='txttotprice' placeholder='Enter your Material Name' value='".$totincome."' required readonly>";
	echo "</div>";
?>
