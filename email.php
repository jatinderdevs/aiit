<?php
// Include PHPMailer classes manually
require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Initialize variables for form data and error messages
$name = $email = $subject = $message = "";
$nameErr = $emailErr = $subjectErr = $messageErr = "";
$successMsg = $errorMsg = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Function to sanitize input
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Validate name
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and spaces allowed";
        }
    }

    // Validate email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    

    // Validate message
    if (empty($_POST["message"])) {
        $messageErr = "Message is required";
    } else {
        $message = test_input($_POST["message"]);
    }

    // If no errors, send email using PHPMailer
    if ($nameErr == "" && $emailErr == ""  && $messageErr == "") {
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host = 'mail.aiit.vic.edu.au';
            $mail->SMTPAuth = true;
            $mail->Username = 'website@aiit.vic.edu.au';
            $mail->Password = 'AIIT@2025';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

             // Enable SMTP debugging to get more details
            $mail->SMTPDebug = 2; // 0 = off, 1 = errors, 2 = full debug
            $mail->Debugoutput = 'html';

            // Temporarily allow insecure connections (for testing only)
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );

            // Recipients
            $mail->setFrom('website@aiit.vic.edu.au', 'AIIT Website');
            $mail->addAddress('info@aiit.vic.edu.au');
            $mail->setFrom('website@aiit.vic.edu.au', 'AIIT Website');

            // Content
            $mail->isHTML(false);
            $mail->Subject = $subject;
            $mail->Body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

            $mail->send();
            $successMsg = "Message sent successfully!";
            // Clear form fields
            $name = $email = $subject = $message = "";
        } catch (Exception $e) {
            $errorMsg = "Failed to send message. Error: " . $mail->ErrorInfo;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Email Result</title>
</head>
<body>
    <?php if ($successMsg): ?>
        <div style="color:green;"><?php echo $successMsg; ?></div>
    <?php endif; ?>
    <?php if ($errorMsg): ?>
        <div style="color:red;"><?php echo $errorMsg; ?></div>
    <?php endif; ?>
    <?php if ($nameErr || $emailErr || $subjectErr || $messageErr): ?>
        <div style="color:red;">
            <?php echo $nameErr . $emailErr . $subjectErr . $messageErr; ?>
        </div>
    <?php endif; ?>
    <a href="contactus.php">Back to Contact Form</a>
</body>
</html>