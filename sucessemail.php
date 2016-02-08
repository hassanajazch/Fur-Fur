<?php
//error_reporting(-1);
//ini_set('display_errors', 'On');
//require 'mail_process/libraries/PHPMailer/PHPMailerAutoload.php';
require 'libraries/PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging

// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
//$uuid=urldecode($_POST["uuid"]);
//$email=urldecode($_POST["email"]);
//$email='12019020027@umt.edu.pk';
//$uuid='12019020027';
//$uuid=(int) $uuid;
//$uuid=$uuid/24+27*4;
//$uuid=$uuid%12134;
//$code=$uuid;
//$mail->Port = 587;
//$mail->Port = 587;$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "hassanajazch@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "nipxfmjonvcatmyj";
//Set who the message is to be sent from
$mail->setFrom($email, 'Hassan Ajaz');
//Set an alternative reply-to address
$mail->addReplyTo('replyto@example.com', 'First Last');
//Set who the message is to be sent to
$mail->addAddress($email, 'hassan');
//Set the subject line
$uuid='You are sucessful register';
$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is a Send code<b>Code</b>'+$uuid;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo $code;

}
?>