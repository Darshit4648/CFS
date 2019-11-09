<?php
include('connect.php');
$data = $_GET['datavalue'];
//echo $data;
//$c_id=$_COOKIE["c_id"];
$sql = "SELECT farmer.harvestingprice,acceptreq.preagreedprice,rawmaterial.totprice FROM farmer INNER JOIN 	acceptreq ON acceptreq.f_id = farmer.f_id INNER JOIN rawmaterial ON rawmaterial.f_id=farmer.f_id where rawmaterial.f_id='$data'";


 
$rs=mysqli_query($con,$sql);

  $qry="select * from extramaterial where f_id='$data' && respondstatus=1";
 $em=mysqli_query($con,$qry);
   $total1=0;
  	while ($data6 = mysqli_fetch_assoc($em)) {

  		$total1=$total1 + $data6['totalprice'];
  	}
  	

  $qry1="select * from farmer where f_id='$data'";
	$rs2=mysqli_query($con,$qry1);
	$data1=mysqli_fetch_assoc($rs2);
     $farmarea=$data1["farmarea"];
  
   $qry2="select * from totalproduction where f_id='$data'";
   $rs3=mysqli_query($con,$qry2);
   $data2=mysqli_fetch_assoc($rs3);
      $totproduction=$data2["totalproduction"];

  $total=0;
  $totpreprice=0;		
  $tothprice=0;
  $totalcharges=0;
  $profit=0;
  $loss=0;

while($row = mysqli_fetch_assoc($rs)){
  
 $total=$total + $row['totprice'];

 $totpreprice= $totproduction * $row['preagreedprice'];
 $tothprice=$farmarea * $row['harvestingprice'];
 $qry3="select * from transportcharges where f_id='$data'"; 
    $rs4=mysqli_query($con,$qry3);
	$data4=mysqli_fetch_assoc($rs4);
     $totprice=$data4["totaltransportprice"];
     $transprice=round($totprice,2);                        

    
}

$totalcharges=$totalcharges + $total + $totpreprice + $tothprice + $totprice+$total1;
$qry4="select * from farmsalary where f_id='$data'";
     $rs5=mysqli_query($con,$qry4);
     $data5=mysqli_fetch_assoc($rs5);
      $farmsalary=$data5["totincome"];

echo "<div class='form-group'>";
	echo "<label>Harvesting Price:</label>";
	echo "<input type='text' class='form-control'  name='txthprice' placeholder='Enter your Material Name' value='".$tothprice."' required readonly>";
	echo "</div>";

echo "<div class='form-group'>";
	echo "<label>preagreedprice:</label>";
	echo "<input type='text' class='form-control'  name='txtpreprice' placeholder='Enter your Material Name' value='".$totpreprice."' required readonly>";
	echo "</div>";

 

	echo "<div class='form-group'>";
	echo "<label>extrarawmaterial total price:</label>";
	echo "<input type='text' class='form-control'  name='txtrawprice' placeholder='Enter your Material Name' value='".$total1."' required readonly>";
	echo "</div>";

	 echo "<div class='form-group'>";
	echo "<label>Total Transport Charges:</label>";
	echo "<input type='text' class='form-control' name='txtotprice' placeholder='Enter your Material Name' value='".$transprice."' required readonly>";
	echo "</div>";
	
	echo "<div class='form-group'>";
	echo "<label>Total Expenditure :</label>";
	echo "<input type='text' class='form-control' name='txttotprice' placeholder='Enter your Material Name' value='".$totalcharges."' required readonly>";
	echo "</div>";

	 // if($farmsalary>$totalcharges)
  //     {
		//      $profit=$farmsalary - $totalcharges;
		//      $profit1=($profit * 100) / $totalcharges;
		//      $profit2= round($profit1,2);
		//      echo "<div class='form-group'>";
		// 		echo "<label>Profit(in %) :</label>";
		// 		echo "<input type='text' class='form-control' placeholder='Enter your Material Name' name='txtpro' value='".$profit2."' required readonly>";
		// 		echo "</div>";

	 //  }
	 //  else
	 //  {
	 //  	   $loss=$totalcharges - $farmsalary;
	 //  	   $loss1=($loss * 100) / $totalcharges;
  //          $loss2=round($loss1,2);
	 //  	   echo "<div class='form-group'>";
		// 	echo "<label>Loss(in %) :</label>";
		// 	echo "<input type='text' class='form-control' name='txtlos' placeholder='Enter your Material Name' value='".$loss2."' required readonly>";
		// 	echo "</div>";
	 //  }
?> 