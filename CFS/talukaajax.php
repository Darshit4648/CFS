<?php

include "connect.php";
$taluka=$_GET["taluka"];

echo "<option value=''>Select</option>";
if($taluka!="")
{
$res=mysqli_query($con,"select *  from villages where t_id=$taluka");


while ($data=mysqli_fetch_array($res)) 
{
  echo "<option value='".$data["v_id"]."'>".$data["villagename"]."</option>";
}

}
?>