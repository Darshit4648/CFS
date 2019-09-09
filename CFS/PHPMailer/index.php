<?php
date_default_timezone_set('Etc/UTC');
require 'phpmailer\PHPMailerAutoload.php';
$mail = new PHPMailer;

//$mail->SMTPDebug = 4;                               

$mail->isSMTP();                                      
//$mail->Host = 'smtp.gmail.com';  
$mail->Host = gethostbyname('ssl://smtp.gmail.com');
$mail->SMTPAuth = true;                               
$mail->Username = 'rathvasandip147@gmail.com';                 
$mail->Password = '8141849471';                           
$mail->SMTPSecure = 'tls';                            
$mail->Port = 587;                                    

$mail->setFrom('rathvasandip147@gmail.com', 'sandip rathva');
$mail->addAddress('raviramani406@gmail.com', 'Reciver');                  

$mail->isHTML(true);                                
$mail->Subject = 'PHPMailer Message...';
$mail->Body    = '<h1>This is the HTML message body <b>in bold!</b></h1>';


if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>