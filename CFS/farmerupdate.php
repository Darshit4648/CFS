  <?php
        include("header.php");
        include("connect.php");

        $f_id=$_COOKIE["f_id"];
        $qry="select * from farmer where f_id='$f_id'";
        $rs=mysqli_query($con,$qry);
        $data=mysqli_fetch_assoc($rs);

          $fname=$data["fname"];
          $city=$data["city"];
          $mobno=$data["mobno"];
          $uname=$data["uname"];
        
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
   <h3 class="col-md-offset-3">Farmer Profile</h3>
         
   
    <form action="Farmupdate1.php"  class="form-horizontal" method="POST"> 
   
      <div class="form-group">
        <label>Farmer Name:</label>
        <input type="text" class="form-control" name="txtfname"  placeholder="Enter your Material Name"  value="<?php echo $fname; ?>" required>
      </div>
      
      <div class="form-group">
        <label>City:</label>
        <input type="text" class="form-control"  name="txtfcity" placeholder="Enter Quantity of Material" value="<?php echo $city; ?>" required>
      </div>

      <div class="form-group">
        <label>Mobile Number:</label>
        <input type="text" class="form-control"  name="txtfmobno" placeholder="Enter your Material Name" value="<?php echo $mobno; ?>" maxlength="10" required>
      </div>

      <div class="form-group">
        <label>Username:</label>
        <input type="text" class="form-control"  name="txtfuname" placeholder="Enter your Material Name" value="<?php echo $uname; ?>" required>
      </div>

    

      <div class="form-group" >
        <div class="col-sm-12" align="center">
          <input type="submit" class="btn btn-primary" value="Update">
  
          <a href="farmerupdate.php" class="btn btn-danger" role="button" >Cancle </a>
        </div>
      </div>
    </form>     
  </div>
</div>
<?php
     include("footer.php");
?>