<?php

include "connect.php";
$district=$_GET["district"];

echo "<option value=''>Select</option>";
if($district!="")
{
$res=mysqli_query($con,"select *  from taluka where c_id=$district");


while ($data=mysqli_fetch_array($res)) 
{
  echo "<option value='".$data["t_id"]."'>".$data["talukaname"]."</option>";
}

}
?>