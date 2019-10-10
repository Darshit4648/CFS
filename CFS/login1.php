	<?php
     session_start();
	include ("connect.php");

	if(isset($_POST["submit"]))
	{           
		        echo $capcha=$_POST["txtcaptcha"];
		          $captcha_code=$_SESSION["captcha_code"];
		        if($capcha == $captcha_code)
		        {
		        $flag=0;
				$unm=$_POST["txtuname"];
					$pwd=$_POST["txtpassword"];

					$qry="select * from farmer where uname='$unm' and password='$pwd'";
					$rs=mysqli_query($con,$qry);
					$data=mysqli_num_rows($rs);
					$data3=mysqli_fetch_assoc($rs); 
			
					if($data==1){
			            
			            $flag++;
						$fname=$data3["fname"];
						$fcity=$data3["city"];
						$f_id=$data3["f_id"];
						setcookie("city",$fcity);
				        setcookie("f_id",$f_id);
				        setcookie("fname",$fname);
						setcookie("uname",$unm);
						 

		        }	
		        
		        	   if($data!=1)
		        	   {
                                $qry2="select * from company where username='$unm' && password='$pwd'";	
				
								$rs1=mysqli_query($con,$qry2);
								$data2=mysqli_num_rows($rs1); 
								$data3=mysqli_fetch_assoc($rs1);

								if($data2==1)
								{
									            $flag++;
												$c_id=$data3["c_id"];
												$cname=$data3["companysname"];
												echo $city=$data3["city"];
										
											    setcookie("c_id",$c_id);
											    setcookie("city",$city);
												setcookie("username",$unm);
									            setcookie("companysname",$cname);
												
												
							  }	
		        	   }

		        
		       if($data2!=1)
		        {
							  $qry3="select * from admin where Uname='$unm' && password='$pwd'";
							   $rs2=mysqli_query($con,$qry3);
							   $data4=mysqli_num_rows($rs2); 
							   $data5=mysqli_fetch_assoc($rs2);

								   if($data4==1)
								   {    
						                 $flag++;
								   	    $a_id=$data5["a_id"];
								   	    echo $Uname=$data5["Uname"];
								   	    setcookie("a_id",$a_id);
								   	    setcookie("Uname",$Uname); 	 
								   }
						    
		          }
		              if($flag!=0)
		              {
		              	 header("location:Home.php");  
		              } 
		              else
		              {
                          	header("location:login.php?errr=1");        
		              }  
		               
		                  
}
else
{
	header("location:login.php?tr=1");  
}
}

	
	?>