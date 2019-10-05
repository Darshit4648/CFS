<?php

	include 'connect.php';
	$vid= $_GET['vid'];
	$sql="select * from villages where v_id=".$vid;
	$rs=mysqli_query($con,$sql);
	while($row=mysqli_fetch_assoc($rs))
	{
		$lat=$row['lat'];
		$lon=$row['lon'];
	}
	$arr = array('lat' => $lat,
		'lon'=>$lon,
	 );
	echo json_encode($arr);


?>