<?php
     include("header.php");
?>
<script>
	 function change_district()
  {
    var id =$('#districtID').val();


    var request = $.ajax({
      url: "FarmerReg1.php",
      type: "GET",
      data: {district : id},
      dataType: "html"
    });

    request.done(function(msg) {
      $("#talukaID").html("");
      $("#talukaID").html(msg);        
    });

    request.fail(function(jqXHR, textStatus) {
      alert( "Request failed: " + textStatus );
    });
  }



</script>
<div class="container-fluid" >

	<div class="jumbotron col-md-offset-3 col-md-6 col-md-offset-3" >
	 <h3 class="col-md-offset-4">Add Villages</h3>
	<?php
                 if (isset($_GET["errr"]))
				  {
							echo"
								 <div class='form-group'>
								<div class='alert alert-success alert-dismissable fade in'>
									<a href='#' class='close' data-dismiss='alert'>&times;</a>
										Village suucessfully added.
															</div>
														</div>
													";
		   
				  }
				  ?>
				 
		
		<form action="Villageinsert.php"  class="form-horizontal" method="POST"> 

		<div class="form-group">
				<label>Districts:</label>
				 <select class="form-control" name="txtdis" id="districtID" onchange="change_district()" >
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
       <select class="form-control" id="talukaID" name="txttaluka"  required>
         <option value="">Select</option>
       </select>
      </div>

		<div class="form-group">
				<label>Village:</label>
				<input type="text" class="form-control" name="txtvillage" placeholder="Enter Village" required>
			</div>
			<div class="form-group" >
				<div class="col-sm-12" align="center">
					<input type="submit" class="btn btn-primary" value="Submit">
	
					 <a href="Village.php" class="btn btn-danger" role="button" >Cancle </a>
				</div>
			</div>
			
		</form>			
	</div>
</div>
<?php
     include("footer.php");
?>