  <?php
        include("header.php");
        include("connect.php");

        $c_id=$_COOKIE["c_id"];
        $qry="select * from company where c_id='$c_id'";
        $rs=mysqli_query($con,$qry);
        $data=mysqli_fetch_assoc($rs);

         $company=$data["companyname"];          
         $cname=$data["companysname"];
          $city=$data["city"];
          $address=$data["address"];
          $email=$data["email"];
             $mobno=$data["mobno"];
          $uname=$data["username"];
        
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
                    Your Profile is successfully Updated.
                              </div>
                            </div>
                          ";
       
          }
          ?>
  
   <h3 class="col-md-offset-3">Company Profile</h3>
         
   
    <form action="companyupdate1.php"  class="form-horizontal" method="POST"> 
   
      <div class="form-group">
        <label>Company Name:</label>
        <input type="text" class="form-control" name="txtfname"  placeholder="Enter  Material Name"  value="<?php echo $company; ?>" readonly required>
      </div>
      
      <div class="form-group">
        <label>Company supervisor Name:</label>
        <input type="text" class="form-control"  name="txtcname" placeholder="Enter Quantity of Material" value="<?php echo $cname; ?>" required>
      </div>

      <div class="form-group">
        <label>City:</label>
        <input type="text" class="form-control"  name="txtcity" placeholder="Enter your Material Name" value="<?php echo $city; ?>" required>
      </div>

      <div class="form-group">
        <label>Address:</label>
        <input type="text" class="form-control"  name="txtaddress" placeholder="Enter your Material Name" value="<?php echo $address; ?>" required>
      </div>

      <div class="form-group">
        <label>Mobile Number:</label>
        <input type="text" class="form-control"  name="txtmobno" placeholder="Enter your Material Name" value="<?php echo $mobno; ?>" maxlength="10" required>
      </div>

       <div class="form-group">
        <label>Email:</label>
        <input type="email" class="form-control"  name="txtemail" placeholder="Enter your Material Name" value="<?php echo $email; ?>" required>
      </div>

       <div class="form-group">
        <label>Username:</label>
        <input type="text" class="form-control"  name="txtuname" placeholder="Enter your Material Name" value="<?php echo $uname; ?>" required>
      </div>

     

      <div class="form-group" >
        <div class="col-sm-12" align="center">
          <input type="submit" class="btn btn-primary" value="Update">
  
           <a href="companyupdate.php" class="btn btn-danger" role="button" >Cancle </a>
        </div>
      </div>
    </form>     
  </div>
</div>
<?php
     include("footer.php");
?>