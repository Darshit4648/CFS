<?php
      include("header.php");
?>
<script>
           function multiply() {
				  a = Number(document.getElementById('nolabour').value);
				  b = Number(document.getElementById('lcharge').value);
				  c = a * b;

				  document.getElementById('totlcharge').value = c;
}

</script>
<div class="container-fluid" >

	<div class="jumbotron col-md-offset-3 col-md-6 col-md-offset-3" >
	 <h3 class="col-md-offset-3">Add Labour Charge</h3>
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
				 
	 <form action="Labourchargeinsert.php"  class="form-horizontal" method="POST"> 
		<div class="form-group">
				<label>Contract Company:</label>
				 <select class="form-control" name="txtcid" >
				 <option>select</option>
				  <?php
				         include("connect.php");
				         $f_id=$_COOKIE["f_id"];
				          $qry="select * from acceptreq where f_id='$f_id'"; 
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
				<input type="Date" class="form-control" name="txtdate" placeholder="Enter Date" required>
			</div>
 
			<div class="form-group">
				<label>Number Of Labour:</label>
				<input type="number" class="form-control" id="nolabour" name="txtnolabour" placeholder="Enter Number Of Labour" required>
			</div>
			
			<div class="form-group">
				<label>Labour Charge(Per Person):</label>
				<input type="text" class="form-control" id="lcharge" onKeyUp="multiply()" name="txtlcharge" placeholder="Enter Labour Charge" required>
			</div>
			
			<div class="form-group">
				<label>Total Labour Charge:</label>
				<input type="text" class="form-control" id="totlcharge" name="txttotcharge" placeholder="Total Labour Charge" readonly required>
			</div>

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