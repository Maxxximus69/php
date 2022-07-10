<?php
//print_r ($_POST);
$email = $POST['email'];
$message = $POST['message'];

$error ='';
if (trim($email) == '')
    $error = 'Enter your email';
    else if(trim($message) == '')
    $error = 'Enter your message';
    else if(strlen($message) < 10)
    $error = 'Message must me more that 10 symbols';

if($error != '') {
echo $error;
exit;
}

$subject = "=?utf-8?B?".base64_encode("Text message")."?=";
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";

mail('wwolf0809@gmail.com', $subject, $message, $headers);

header('Location: /support.php');
?>