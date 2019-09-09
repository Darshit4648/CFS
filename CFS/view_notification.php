<?php
    include("connect.php");
$sql="select * from acceptreq where respondstatus=0";
$result=mysqli_query($con, $sql);

$response='';
while($row=mysqli_fetch_array($result)) {
	$response = $response . "<div class='notification-latest'>" .
	"<div class='notification-message'>". $row["message"] . "</div>" . 
	"<div class='notification-c_id'>" . $row["c_id"]  . "</div>" .
	"</div>";
}
if(!empty($response)) {
	print $response;
}
?>