<?php
     include("header.php");
?>
<script type="text/javascript">

	function Myfun(data)
	{
 	// alert(data);
 	var req = new XMLHttpRequest();
 	req.open("GET","../CFS/getdistance.php?datavalue="+data,true);
 	req.send();

 	req.onreadystatechange=function(){

 		if (req.readyState==4 && req.status==200) {
 			document.getElementById('nu').innerHTML = req.responseText;
 		}
 	}
 }
 </script>
 <script>
           function multiply() {
				  a = Number(document.getElementById('distance').value);
				  b = Number(document.getElementById('tprice').value);
				  c = a * b;

				  document.getElementById('totprice').value = c;
}
</script>
<div class="container-fluid" >
	<div class="jumbotron col-md-offset-3 col-md-6 col-md-offset-3" >
		<h3 class="col-md-offset-3">Transport Charges:</h3>

		<form action="transportchargeinsert.php" class="form-horizontal" method="POST"> 
			<div class="form-group">
				<label>Contract Farmer:</label>
				<select class="form-control" id="txtfarmer" name="txtfid" onchange="Myfun(this.value)">
					<option selected >select</option>
					<?php
							include("connect.php");
							$c_id=$_COOKIE["c_id"];
							$qry="select * from acceptreq where c_id='$c_id' && respondstatus=1"; 
							$rs=mysqli_query($con,$qry);

           
					while($data=mysqli_fetch_assoc($rs))
					{     
						$f_id=$data["f_id"];   	 
						$qry1="select * from farmer where f_id='$f_id'";
						$rs1=mysqli_query($con,$qry1);
						$data1=mysqli_fetch_assoc($rs1);
                                                               
						echo "<option value='".$data["f_id"]."'>".$data1["fname"]."</option>";
					}   


					?>
				</select>
			</div>
			<span id="nu">
				
			</span>
			<div class="form-group">
				<label>Transport Price(Per KM):</label>
				<input type="text" class="form-control" id="tprice" name="txttprice" placeholder="Enter your Material Name" onKeyUp="multiply()" required>
			</div> 

			<div class="form-group">
				<label> Total Transport Price:</label>
				<input type="text" class="form-control" id="totprice" name="txttotprice" placeholder="Total Transport charges" required readonly>
			</div> 
			<div class="form-group" >
				<div class="col-sm-12" align="center">
					<input type="submit" class="btn btn-primary" value="Submit">
	
					 <a href="transportcharges.php" class="btn btn-danger" role="button" >Cancle </a>
			</div>

		</form>
	</div>
</div>
</div>
<?php
include("footer.php");
?>