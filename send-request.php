<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '/source/PHPMailer/src/Exception.php';
require '/source/PHPMailer/src/PHPMailer.php';
require '/source/PHPMailer/src/SMTP.php';

$title = $_GET["title"];
$crn = $_GET["crn"];
$prog = $_GET["prog"];
$email = $_GET["email"];
$username = strstr($email, '@', true);
$to = 'moodle@wit.ie';

$subject = "Request Access for ".$username." on CRN ".$crn;
$body = "Add user '$username' to '$title', with CRN $crn and Programme Code $prog";

echo $email;

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.office365.com';                   // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'no-reply-moodle@wit.ie';                 // SMTP username
    $mail->Password = 'Blueskies2015!';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($mail->Username, 'Mailer');
    $mail->addAddress($to, 'Moodle');     // Add a recipient
    $mail->AddReplyTo($email, 'Reply to name'); // Add reply to for the lecturer's email address

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $body;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
?>


