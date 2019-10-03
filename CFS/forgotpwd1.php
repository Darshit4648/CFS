<?php
      require 'PHPMailer\phpmailer\PHPMailerAutoload.php';
      include("connect.php");
      include("header.php");

      $email=$_POST["txtemail"];
      $qry="select * from company where email = '$email'"; 
      $rs=mysqli_query($con,$qry);

      $data=mysqli_fetch_assoc($rs);
      $row=mysqli_num_rows($rs);

      if($row==1)
     {
         $mail2=$data["password"];
         $mail3=$data["companysname"];
        $mail1=$_POST["txtemail"];
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
                    $mail->addAddress($email,'Darshit',$mail2,$mail3);  
                        $mail->Body    = "
                          <div style='height:150px;background-color:#f0f0f5;padding:10px;'>
                            <div style='padding-top:10px;font-size:20px;font-family: Arial, Helvetica, sans-serif;'>
                              <p> ".$mail3." Your password is:".$mail2=$data['password']." </p><hr>
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
                            header("location:companyforgotpwd.php?err=1");
                        }
                      }
                     else
                        {
                            header("location:companyforgotpwd.php?errr=1");
                        }

                       
?>