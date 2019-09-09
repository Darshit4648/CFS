<?php
	 include_once("header.php");
    ?> 
<div class="container-fluid" >
	<div class="jumbotron col-md-offset-3 col-md-6 col-md-offset-3" >
		<?php
                 if (isset($_GET["errr"]))
				  {
							echo"
								 <div class='form-group'>
								<div class='alert alert-success alert-dismissable fade in'>
									<a href='#' class='close' data-dismiss='alert'>&times;</a>
										Your Pre aggreed price and message is succesfully sended.
															</div>
														</div>
													";
		   
				  }

		?>

		<form action="companyans1.php"  class="form-horizontal" method="POST">  
		
		<div class="form-group">
				<label>Starting Date:</label>
				<input type="date" class="form-control" name="txtsdate" placeholder="Enter Starting Date" required>
			</div>
			<div class="form-group">
				<label>pre Agreed Price(per Quintal(100kg)):</label>
				<input type="text" class="form-control" name="txtagprice" placeholder="Enter Pre agreed Price" required>
			</div>
			<div class="form-group">
				<label>Respond meassage:</label>
				<input type="text" class="form-control" name="txtmessage" placeholder="Enter your message" required>
			</div>
			<div class="form-group">
				
				<input type="hidden" class="form-control" name="txtfid" placeholder="Enter your message" value="<?php echo $f_id=$_GET["f_id"]; ?>" required >
			</div>
			
			<div class="form-group" >
				<div class="col-sm-12" align="center">
					<button type="submit" class="btn btn-primary">submit</button> 
	
					<input type="submit" class="btn btn-danger" value="cancle">
				</div>
			</div>
		</form>
		
	
	</div>

</div>
	
<?php
       include_once("footer.php");
?>	
