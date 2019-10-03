<?php
     include("header.php");
?>
<div class="container-fluid" >

	<div class="jumbotron col-md-offset-3 col-md-6 col-md-offset-3" >
	 <h3 class="col-md-offset-2">Add Total Production</h3>
	 <?php
                 if (isset($_GET["errr"]))
				  {
							echo"
								 <div class='form-group'>
								<div class='alert alert-success alert-dismissable fade in'>
									<a href='#' class='close' data-dismiss='alert'>&times;</a>
										Total Production Can Be Added Successfully.
															</div>
														</div>
													";
		   
				  }
				  ?>
				 
	 <form action="totalproductioninsert.php"  class="form-horizontal" method="POST"> 
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
				<label>Total Production(in quintal):</label>
				<input type="text" class="form-control"  name="txttotpro" placeholder="Enter Total Production" required>
			</div>
				<div class="form-group" >
				<div class="col-sm-12" align="center">
					<input type="submit" class="btn btn-primary" value="Submit">
	
					 <a href="totalproduction.php" class="btn btn-danger" role="button" >Cancle </a>
				</div>
			</div>
			</form>
			</div>
			</div>

<?php
     include("footer.php");
?>