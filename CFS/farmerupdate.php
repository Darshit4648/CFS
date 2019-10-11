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
  <script>

    function ValidateFname() {
        var isValid = false;
        var regex = /^[a-zA-Z][a-zA-Z ]+$/;
        isValid = regex.test(document.getElementById("fname").value);
        document.getElementById("spnErrorFname").style.display = !isValid ? "block" : "none";
        return isValid;
    }

    function ValidateFphn() {
        var isValid = false;
        var regex = /^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$/;
        isValid = regex.test(document.getElementById("fmobid").value);
        document.getElementById("spnErrorFphn").style.display = !isValid ? "block" : "none";
        return isValid;
    }
     function ValidateFusername() {
        var isValid = false;
        var regex = /^[a-zA-Z0-9_-]{6,14}$/;
        isValid = regex.test(document.getElementById("Fuserid").value);
        document.getElementById("spnErrorFusername").style.display = !isValid ? "block" : "none";
        return isValid;
    }

  </script>
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
        <input type="text" class="form-control" name="txtfname" id="fname" placeholder="Enter your Material Name" onchange="return ValidateFname(this)"    value="<?php echo $fname; ?>" required>
        <span id="spnErrorFname" style="color: Red; display: none">*Valid characters: alphabetical only And maximum 80 characters are allowed.</span>
      </div>
      
      

      <div class="form-group">
        <label>Mobile Number:</label>
        <input type="text" class="form-control"  name="txtfmobno" id="fmobid" placeholder="Enter your Material Name" onchange="return ValidateFphn(this)"  value="<?php echo $mobno; ?>" maxlength="10" required>
         <span id="spnErrorFphn" style="color: Red; display: none">*Valid characters: Numbers only, 10 Digits are allowed And Number is an Indian Number allowed.</span>
      </div>

      <div class="form-group">
        <label>Username:</label>
        <input type="text" class="form-control"  name="txtfuname" id="Fuserid" placeholder="Enter your Material Name" onchange="return ValidateFusername(this)" value="<?php echo $uname; ?>" required>
        <span id="spnErrorFusername" style="color: Red; display: none">*Valid characters: Only alphabetical characters,1 underscop or hyphen,and string must be 8 or longer.</span>
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