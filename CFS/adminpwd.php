<?php
     include("header.php");
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
                    Your Password is Successfully changed.
                              </div>
                            </div>
                          ";
       
          }
              if (isset($_GET["err"]))
          {
            
                 echo" <div class='form-group'>
                                            <div class='alert alert-danger alert-dismissable fade in'>
                                                <a href='#' class='close' data-dismiss='alert'>&times;</a>
                                                                      Your Username Is Wrong !!!
                                            </div>
                               
                                    </div>";
       
          }
          ?>
  
   <h3 class="col-md-offset-3">Forgot Password</h3>
         
   
    <form action="adminpwd1.php"  class="form-horizontal" method="POST"> 
   
      <div class="form-group">
        <label>Username:</label>
        <input type="text" class="form-control" name="txtuname" id="unameid"  placeholder="Enter your Username"  required>
      </div>
      
      <div class="form-group">
        <label>New password:</label>
        <input type="password" class="form-control"  name="txtnpwd" id="npwdid" placeholder="Enter Your New Password"  required>
      </div>

      <div class="form-group">
        <label>Confirm Password:</label>
        <input type="password" class="form-control"  name="txtcpwd" id="cpwdid" placeholder="Enter your Confirm Password"  required>
        <span id='error' class='hidden' style='color:red'>Not Matched</span>
      </div>

      

      <div class="form-group" >
        <div class="col-sm-12" align="center">
          <input type="submit" class="btn btn-primary" id="save" value="Save">
  
           <a href="forgotpwd.php" class="btn btn-danger" role="button" >Cancle </a>
        </div>
      </div>
    </form>     
  </div>
</div>
<script>
	 $('#cpwdid').change(function(){
          // alert();
               if($('#npwdid').val() !== $('#cpwdid').val()){
                    $('#error').removeClass('hidden');
                      $('#save').attr("disabled", true);
                    return false;
                 
               }
               else
               {
                 $('#error').addClass('hidden');
                   $('#save').attr("disabled", false);
               }
        });
</script>
<?php
     include("footer.php");
?>