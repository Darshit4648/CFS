<?php
      include("header.php");
?>
<div class="container-fluid" >
  
  <div class="jumbotron col-md-offset-3 col-md-6 col-md-offset-3" >
<?php
                 if (isset($_GET["err"]))
				  {
							echo"
								 <div class='form-group'>
								<div class='alert alert-success alert-dismissable fade in'>
									<a href='#' class='close' data-dismiss='alert'>&times;</a>
										Your password send to the your email.
															</div>
														</div>
													";
		   
				  }
           if (isset($_GET["errr"]))
          {
            
                 echo" <div class='form-group'>
                                            <div class='alert alert-danger alert-dismissable fade in'>
                                                <a href='#' class='close' data-dismiss='alert'>&times;</a>
                                                                      Your Email Address Is Not Exist !!!
                                            </div>
                               
                                    </div>";
       
          }
				  ?>
	 <h3 class="col-md-offset-3">Forgot Password</h3>
         
	 <form action="forgotpwd1.php"  class="form-horizontal" method="POST"> 
		
          <div class="form-group">
				<label>Email:</label>
				<input type="email" class="form-control" id="email" name="txtemail" placeholder="Enter Your Email Address" required>
			</div>
 
			<div class="form-group" >
				<div class="col-sm-12" align="center">
					<input type="submit" class="btn btn-primary" value="Submit">
	
					 <a href="login.php" class="btn btn-danger" role="button" >Cancle </a>
				</div>
			</div>
		</form>			
	</div>
  </div>
  <?php
      include("footer.php");
?>