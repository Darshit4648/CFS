<?php
include("connect.php");
include("header.php");

?>
<script type="text/javascript">

	function Myfun(data)
	{
 	// alert(data);
 	
 	if(data==0){

 	}
 	else{
 		var req = new XMLHttpRequest();
	 	req.open("GET","../CFS/companyaccount1.php?datavalue="+data,true);
	 	req.send();

	 	req.onreadystatechange=function(){

	 		if (req.readyState==4 && req.status==200) {
	 			document.getElementById('nu').innerHTML = req.responseText;
	 		}
	 	}
 	}
 }
</script>

<div class="container-fluid" >
	<div class="jumbotron col-md-offset-3 col-md-6 col-md-offset-3" >
		<h3 class="col-md-offset-3">Company Accounts</h3>

		<form action="companyaccountinsert.php" class="form-horizontal" method="POST"> 
			<div class="form-group">
				<label>Contract Farmer:</label>
				<select class="form-control" id="txtfarmer" name="txtfarmer" onchange="Myfun(this.value)">
					<option selected value="0">select</option>
					<?php
					include("connect.php");
					$c_id=$_COOKIE["c_id"];
					$qry="select * from acceptreq where c_id='$c_id'"; 
					$rs=mysqli_query($con,$qry);

                          //echo $qry;
					while($data=mysqli_fetch_assoc($rs))
					{     
						$f_id=$data["f_id"];
                           	  //echo $f_id;
						$qry1="select * from farmer where f_id='$f_id'"; 
                           	 // echo $qry1;
						$rs1=mysqli_query($con,$qry1);
						$data1=mysqli_fetch_assoc($rs1);
                                    //echo $data1["fname"];                            
						echo "<option value='".$data["f_id"]."'>".$data1["fname"]."</option>";
					}   


					?>
				</select>
			</div>
			<span id="nu">
				
			</span>
			<!-- <div class="form-group">
				<label>Material Name:</label>
				<input type="text" class="form-control" id="txthprice" placeholder="Enter your Material Name" required readonly>
			</div> -->
			<div class="form-group" >
				<div class="col-sm-12" align="center">
					<input type="submit" class="btn btn-primary" value="Submit">
	
					<input type="submit" class="btn btn-danger " value="cancle">
				</div>
			</div>
		</form>
	</div>
</div>
<?php
include("footer.php");
?>