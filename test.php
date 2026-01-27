
<?php
// Enable error reporting for testing
error_reporting(E_ALL);
ini_set('display_errors', 1);

$to = 'jazz.s@aiit.vic.edu.au';  // Replace with your actual email
$subject = 'Test Email from HostSoch';
$message = 'If you receive this, PHP mail() works!';
$headers = 'From: noreply@your-domain.com' . "\r\n" .
           'Reply-To: noreply@your-domain.com' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

if (mail($to, $subject, $message, $headers)) {
    echo 'Mail sent successfully! Check your inbox/spam.';
} else {
    echo 'Mail failed. Check server logs.';
}
?>