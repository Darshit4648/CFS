<?php
        include("connect.php");
        include("header.php");
?>
<script>
           function multiply() {
				  a = Number(document.getElementById('quan').value);
				  b = Number(document.getElementById('uprice').value);
				  c = a * b;

				  document.getElementById('tot').value = c;
}

</script>

<div class="container-fluid" >

	<div class="jumbotron col-md-offset-3 col-md-6 col-md-offset-3" >
	 <h3 class="col-md-offset-3">Add Raw Materials</h3>
	<?php
                 if (isset($_GET["errr"]))
				  {
							echo"
								 <div class='form-group'>
								<div class='alert alert-success alert-dismissable fade in'>
									<a href='#' class='close' data-dismiss='alert'>&times;</a>
										Raw Material suucessfully added.
															</div>
														</div>
													";
		   
				  }
				  ?>
				 
		
		<form action="Rawmaterialinsert.php"  class="form-horizontal" method="POST"> 
		<div class="form-group">
				<label>Contract Farmer:</label>
				 <select class="form-control" name="txtfid" >
				 <option>select</option>
				     <?php
				         include("connect.php");
				         $c_id=$_COOKIE["c_id"];
				          $qry="select * from acceptreq where c_id='$c_id' && respondstatus=1"; 
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

			<div class="form-group">
				<label>Material Type:</label>
				 <select class="form-control" name="txtmtype">
				    <option>select</option>
			        <option>Seed</option>
			        <option>Fertilizers</option>
			        <option>Pesticides</option>
			       </select>
			</div>
			<div class="form-group">
				<label>Material Name:</label>
				<input type="text" class="form-control" name="txtmname" placeholder="Enter your Material Name" required>
			</div>
			
			<div class="form-group">
				<label>quantity(per Bag):</label>
				<input type="number" class="form-control" id="quan" name="txtquant" placeholder="Enter Quantity of Material" required>
			</div>

			<div class="form-group">
				<label>Unit Price (per Bag):</label>
				<input type="text" class="form-control" id="uprice" onKeyUp="multiply()"  name="txtuprice" placeholder="Enter your Material Name" required>
			</div>
			<div class="form-group">
				<label>Total Price:</label>
				<input type="text" class="form-control" id="tot" name="txttotprice" placeholder="Enter your Material Name" readonly  required>
			</div>

			<div class="form-group" >
				<div class="col-sm-12" align="center">
					<input type="submit" class="btn btn-primary" value="Submit">
	
					 <a href="Rawmaterial.php" class="btn btn-danger" role="button" >Cancle </a>
				</div>
			</div>
		</form>			
	</div>
</div>
	
<?php
        include("footer.php");
?>