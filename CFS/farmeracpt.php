<?php
      require 'PHPMailer\phpmailer\PHPMailerAutoload.php';
      include("connect.php");
      include("header.php");

      $f_id=$_COOKIE["f_id"];
        // $c_id=$_COOKIE["c_id"];
        echo $c_id=$_GET["c_id"];

      $qry="update acceptreq set respondstatus='1' where c_id= '$c_id'";
        $rs1=mysqli_query($con,$qry);
      date_default_timezone_set('Asia/Kolkata');
       $time=date( 'd/m/Y h:i:s', time ());
       //ssecho $time;
       $qry1="update acceptreq set updated_at='$time' where c_id= '$c_id'";
       $rs1=mysqli_query($con,$qry1);


       // $qry2="select * from acceptreq where f_id='$f_id'";
       // $rs2=mysqli_query($con,$qry2);
       // $data=mysqli_fetch_assoc($rs2);
       //  $c_id=$data["c_id"];
       $qry3="select * from company where c_id='$c_id'";
           $rs3=mysqli_query($con,$qry3);
           $qry4="select * from farmer where f_id='$f_id'";
           $rs4=mysqli_query($con,$qry4);
           $row=mysqli_num_rows($rs3);
           if($row==1)
           {
               $data1=mysqli_fetch_assoc($rs3);
                echo $mail1=$data1["email"]; 
                  $data2=mysqli_fetch_assoc($rs4);
                 $mail2=$data2["fname"];
                 echo $mail2;
                $mail = new PHPMailer;                              
                      $mail->isSMTP();                                      
                      $mail->Host = 'smtp.gmail.com';  
                      $mail->SMTPAuth = true;                               
                      $mail->Username = 'tankdarhit437@student.aau.in';                 
                      $mail->Password = '12345678';                           
                      $mail->SMTPSecure = 'tls';                            
                      $mail->Port = 587; 
                      $mail->SMTPAuth=true;                                   
                      $mail->setFrom('tankdarhit437@student.aau.in', 'Darshit Tank');
                      $mail->isHTML(true);                                
                      $mail->Subject = 'Contract Farming System';
                      

                    echo"<pre>";
                    print_r($_POST);
                    echo"</pre>";
                    $email=$mail1;
                    $mail->addAddress($email,'Darshit',$mail2);  
                        $mail->Body    = "
                          <div style='height:150px;background-color:#f0f0f5;padding:10px;'>
                            <div style='padding-top:10px;font-size:20px;font-family: Arial, Helvetica, sans-serif;'>
                              <p> ".$mail2=$data2['fname']." can be accepted the your farm request and started contract farming.</p><hr>
                              <b><b><br>
                          
                            </div>
                          </div>
                        ";
                      if(!$mail->send()) {
                          echo 'Message could not be sent.';
                          echo 'Mailer Error: ' . $mail->ErrorInfo;
                          
                          
                        }
                        else
                        {
                            header("location:farmeracceptreq.php?err=1");
                        }
                  }

                    else
                    {
                        header("location:farmeracceptreq.php");
                    }

?>
<?php
       include("footer.php");
?>