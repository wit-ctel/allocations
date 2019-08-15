<?php
require_once("Mail.php");

$title = $_GET["title"];
$crn = $_GET["crn"];
$prog = $_GET["prog"];
$email = $_GET["email"];
$username = strstr($email, '@', true);


$subject = "Request Import for ".$username." on CRN ".$crn;
$to = "pwindle@wit.ie";//$email;
$body = "Add user '$username' to '$title', with CRN $crn and Programme Code $prog";

$host = "smtp.office365.com:587";
$username = "no-reply-moodle@wit.ie";
$password = "Blueskies2015!";

$headers = 'From: '.$email . "\r\n" .
    'Reply-To: '.$email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$headers = array('From' => $email, 'To' => $to, 'Subject' => $subject);

$smtp = Mail::factory('smtp', array ('host' => $host,
                                     'auth' => true,
                                     'username' => $username,
                                     'password' => $password));

$mail = $smtp->send($to, $headers, $body);

if ( PEAR::isError($mail) ) {
    echo("<p>Error sending mail:<br/>" . $mail->getMessage() . "</p>");
} else {
    echo("<p>Message sent.</p>");
}
?>


