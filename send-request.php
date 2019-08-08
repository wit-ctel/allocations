<?php

$title = $_GET["title"];
$crn = $_GET["crn"];
$prog = $_GET["prog"];
$email = $_GET["email"];
$username = strstr($email, '@', true);

$subject = "Request Import for ".$username." on CRN ".$crn;
$to =$email;
$message = "Add user '$username' to '$title', with CRN $crn and Programme Code $prog";

$headers = 'From: '.$email . "\r\n" .
    'Reply-To: '.$email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to,$subject,$message,$headers);

?>

