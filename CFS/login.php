<?php
    include_once("header.php");
?>



<div class="container">   
<?php
   
if(isset($_GET["errrr"]))
                            {
                                echo"<div class='col-md-4 col-md-offset-4 '>
                                        <div class='form-group'>
                                            <div class='alert alert-success alert-dismissable fade in'>
                                                <a href='#' class='close' data-dismiss='alert'>&times;</a>
                                                      your registration is suucessfully
                                                      </div>
                                        </div>
                                    </div>";
                            }

                       if(isset($_GET["var"]))
                            {
                                echo"<div class='col-md-4 col-md-offset-4'>
                                        <div class='form-group'>
                                            <div class='alert alert-success alert-dismissable fade in'>
                                                <a href='#' class='close' data-dismiss='alert'>&times;</a>
                                                     You Are Successfully Logout.   
                                            </div>
                                        </div>
                                    </div>";
                            }   
                            if(isset($_GET["errr"]))
                            {
                                echo"<div class='col-md-4 col-md-offset-4'>
                 <div class='form-group'>
                                            <div class='alert alert-danger alert-dismissable fade in'>
                                                <a href='#' class='close' data-dismiss='alert'>&times;</a>
                                                                      Your Username And password Is Wrong !!!
                                            </div>
                                        </div>
                                    </div>";
                            }   
?> 
        <div style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form  class="form-horizontal" action="login1.php" method="POST" role="form" >
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" class="form-control" name="txtuname" value="" placeholder="username or email" required>                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input  type="password" class="form-control" name="txtpassword" placeholder="password" required>

                                    </div>

                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-8 col-sm-offset-5">
                                      <input type="submit" class="btn btn-primary" value="Login" name="submit">
                                      
                                    </div>
                                </div>


                               <!--  <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Don't have an account! 
                                        <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Sign Up Here
                                        </a>
                                        </div>
                                    </div>
                                </div>    --> 
                            </form>     



                        </div>                     
                    </div>  
        </div>
                      
                         </div>
                         
                
        
     <?php
    include_once("footer.php");
?>
    