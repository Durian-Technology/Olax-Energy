<?php

//error_reporting(0);

$inputName = $_POST[username];
$from = $_POST[email];
$inputPhone = $_POST[phone];
//$inputCompany = $_POST[inputCompany];
$subject = "Email from Website Visitor";
$inputMessage = $_POST[message];

//echo "$inputName<br>$inputEmail<br>$inputPhone<br>$inputCompany<br>$inputSubject<br>$inputMessage";

$to = 'contact@olaxenergy.com';
//$subject = 'Marriage Proposal';
$message = 'Name: $inputName<br> Email: $from<br> Phone: $inputPhone<br> Message: $inputMessage'; 

###############

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Compose a simple HTML email message

$message = '<html><body>';
$message .= 'Name: ' . $inputName . "<br><br>";
$message .= 'Email: ' . $from . "<br><br>";
$message .= 'Phone: ' . $inputPhone . "<br><br>";
$message .= 'Message: ' . $inputMessage . "<br><br>";
$message .= '</body></html>';

// Sending email
if(mail($to, $subject, $message, $headers)){
    echo 'Your mail has been sent successfully. We will get back to you shortly.';
} else{

    echo 'Unable to send email. Please try again.';

}
?>