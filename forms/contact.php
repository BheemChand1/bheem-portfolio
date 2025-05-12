<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../phpmailer/PHPMailer.php';
require '../phpmailer/SMTP.php';
require '../phpmailer/Exception.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        echo "All fields are required.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'mail.bheemchand.com';           // Usually 'mail.yourdomain.com' for custom domains
        $mail->SMTPAuth = true;
        $mail->Username = 'support@bheemchand.com';     // Your domain email
        $mail->Password = 'bheem@8126';                 // Email password (keep it secure)
        $mail->SMTPSecure = 'tls';                      // Or 'ssl' if your hosting requires it
        $mail->Port = 587;                              // Use 465 for SSL, 587 for TLS

        // Sender and recipient
        $mail->setFrom('support@bheemchand.com', 'Website Contact Form');
        $mail->addAddress('bheemchand8126@gmail.com');  // Your destination email


        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = "
            <h3>New Contact Form Submission</h3>
            <p><strong>Name:</strong> {$name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Subject:</strong> {$subject}</p>
            <p><strong>Message:</strong><br>{$message}</p>
        ";

        $mail->AltBody = strip_tags("Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message");

        $mail->send();
        echo "success";
    } catch (Exception $e) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
} else {
    echo "Invalid request.";
}
