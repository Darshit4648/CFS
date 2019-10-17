<?php
     include("header.php");
?>
<div class="container-fluid" >

	<div class="jumbotron col-md-offset-3 col-md-6 col-md-offset-3" >
	 <h3 class="col-md-offset-4">Add Taluka</h3>
	<?php
                 if (isset($_GET["errr"]))
				  {
							echo"
								 <div class='form-group'>
								<div class='alert alert-success alert-dismissable fade in'>
									<a href='#' class='close' data-dismiss='alert'>&times;</a>
										Taluka suucessfully added.
															</div>
														</div>
													";
		   
				  }
				  ?>
				 
		
		<form action="Talukainsert.php"  class="form-horizontal" method="POST"> 

		<div class="form-group">
				<label>Districts:</label>
				 <select class="form-control" name="txtdis" required>
				 <option>select</option>
				     <?php
				         include("connect.php");
				         $qry="select * from city";
				         $rs=mysqli_query($con,$qry);
				         while($data=mysqli_fetch_assoc($rs))
				         {
				                     echo $data["cityname"];   
                                    echo "<option value='".$data["c_id"]."'>".$data["cityname"]."</option>";
                       }   

                      
				  ?>
			       </select>
			</div>


		<div class="form-group">
				<label>Taluka:</label>
				<input type="text" class="form-control" name="txttaluka" placeholder="Enter District" required>
			</div>
			<div class="form-group" >
				<div class="col-sm-12" align="center">
					<input type="submit" class="btn btn-primary" value="Submit">
	
					 <a href="Taluka.php" class="btn btn-danger" role="button" >Cancle </a>
				</div>
			</div>
			
		</form>			
	</div>
</div>
<?php
     include("footer.php");
?>