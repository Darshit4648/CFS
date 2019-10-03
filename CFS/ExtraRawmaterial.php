<?php
     include("header.php");
     include("connect.php");
?>
<script>
           function multiply() {
				  a = Number(document.getElementById('quanid').value);
				  b = Number(document.getElementById('quanprice').value);
				  c = a * b;
                 
				  document.getElementById('quantotprice').value = c;
}

</script>

<div class="container-fluid" >

	<div class="jumbotron col-md-offset-3 col-md-6 col-md-offset-3" >
	 <h3 class="col-md-offset-2">Add ExtraRaw Materials</h3>
	 <?php
                 if (isset($_GET["errr"]))
				  {
							echo"
								 <div class='form-group'>
								<div class='alert alert-success alert-dismissable fade in'>
									<a href='#' class='close' data-dismiss='alert'>&times;</a>
										Extra Raw Material suucessfully added.
															</div>
														</div>
													";
		   
				  }
				  ?>
				 
	 <form action="Extrarawmaterialinsert.php"  class="form-horizontal" method="POST"> 
		<div class="form-group">
				<label>Contract Company:</label>
				 <select class="form-control" name="txtcid" >
				 <option>select</option>
				  <?php
				          include("connect.php");
				         $f_id=$_COOKIE["f_id"];
				          $qry="select * from acceptreq where f_id='$f_id' && respondstatus=1"; 
				          $rs=mysqli_query($con,$qry);

                          //echo $qry;
                           while($data=mysqli_fetch_assoc($rs))
                           {     
                           	  $c_id=$data["c_id"];
                           	  //echo $f_id;
                           	  $qry1="select * from company where c_id='$c_id'"; 
                           	 // echo $qry1;
				              $rs1=mysqli_query($con,$qry1);
                              $data1=mysqli_fetch_assoc($rs1);
                                    //echo $data1["fname"];                            
                                    echo "<option value='".$data["c_id"]."'>".$data1["companyname"]."</option>";
                       }   

                      
				  ?>
				  </select>
			</div>
           
          <div class="form-group">
				<label>Date:</label>
				<input type="Date" class="form-control"  name="txtdate" placeholder="Enter Date" required>
			</div>
 
			<div class="form-group">
				<label>Material Type:</label>
				 <select class="form-control" name="txtmtype" required>
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
				<input type="number" class="form-control" id="quanid" name="txtquant" placeholder="Enter Quantity of Material" required>
			</div>

			<div class="form-group">
				<label>Unit price(per Bag):</label>
				<input type="text" class="form-control" id="quanprice" onKeyUp="multiply()" name="txtquantprice" placeholder="Enter Unit Price of Material" required>
			</div>

			<div class="form-group">
				<label>Total Price:</label>
				<input type="text" class="form-control" id="quantotprice" name="txtquanttotprice" placeholder="Enter Total Price of Material" readonly required>
			</div>

			<div class="form-group" >
				<div class="col-sm-12" align="center">
					<input type="submit" class="btn btn-primary" value="Submit">
	
					 <a href="ExtraRawmaterial.php" class="btn btn-danger" role="button" >Cancle </a>
				</div>
			</div>
		</form>			
	</div>
</div>
	
<?php
        include("footer.php");
?>