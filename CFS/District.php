<?php
     include("header.php");
?>
<div class="container-fluid" >

	<div class="jumbotron col-md-offset-3 col-md-6 col-md-offset-3" >
	 <h3 class="col-md-offset-4">Add Districts</h3>
	<?php
                 if (isset($_GET["errr"]))
				  {
							echo"
								 <div class='form-group'>
								<div class='alert alert-success alert-dismissable fade in'>
									<a href='#' class='close' data-dismiss='alert'>&times;</a>
										District suucessfully added.
															</div>
														</div>
													";
		   
				  }
				  ?>
				 
		
		<form action="Districtinsert.php"  class="form-horizontal" method="POST"> 
		<div class="form-group">
				<label>Districts:</label>
				<input type="text" class="form-control" id="disid" name="txtdistrict" placeholder="Enter District" required>
			</div>
			<div class="form-group" >
				<div class="col-sm-12" align="center">
					<input type="submit" class="btn btn-primary" value="Submit">
	
					 <a href="District.php" class="btn btn-danger" role="button" >Cancle </a>
				</div>
			</div>
			
		</form>			
	</div>
</div>
<?php
     include("footer.php");
?>