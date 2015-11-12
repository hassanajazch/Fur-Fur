<?php  
 
require("class.phpmailer.php"); // path to the PHPMailer class
 
$mail = new PHPMailer();  
 
$mail->IsSMTP();  // telling the class to use SMTP
$mail->Mailer = "smtp";
$mail->Host = "ssl://smtp.gmail.com";
$mail->Port = 465;
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->Username = "zeeshanumt2790@gmail.com"; // SMTP username
$mail->Password = "Zee_2790"; // SMTP password 
 
$mail->From     = "zeeshanumt2790@gmail.com";
$mail->AddAddress("zeeshanumt2790@gmail.com");  
 
$mail->Subject  = "First PHPMailer Message";
$mail->Body     = "Hi! \n\n This is my first e-mail sent through PHPMailer.";
$mail->WordWrap = 50;  
 
if(!$mail->Send()) {
echo 'Message was not sent.';
echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
echo 'Message has been sent.';
}
?>