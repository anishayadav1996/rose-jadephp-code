<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load PHPMailer
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

// Configure the default email settings
function createMailer() {
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';  // SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = '7276a30afabd55';       // SMTP username
        $mail->Password = '5ffca07b59f4fd';       // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
        $mail->setFrom('info@rosejadeinc.com', 'Rose Jade');
    } catch (Exception $e) {
        error_log("Mailer Error: {$mail->ErrorInfo}");
    }
    return $mail;
}
