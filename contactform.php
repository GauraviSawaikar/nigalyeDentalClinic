<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Require the PHPMailer library
require 'vendor/autoload.php';

if (isset($_POST['email'])) {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email']; // Use the email entered by the user
    $phone_number = $_POST['phoneNumber'];
    $msg_subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = 'nigalyedentalclinic@gmail.com';  // PUT YOUR EMAIL ID

    $subject = $msg_subject;
    $message_body = "Name: $name<br>";
    $message_body .= "Email: $email<br>";
    $message_body .= "Phone Number: $phone_number<br>";
    $message_body .= "Message: $message";

    $mail = new PHPMailer(true);

    try {
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->IsHTML(true);
        $mail->SMTPSecure = "ssl";
        $mail->Host = "smtp.zoho.in"; 
        $mail->Port = 465; 
        $mail->Username = 'nigalyedentalclinic@gmail.com'; //PUT EMAIL 
        $mail->Password = 'Nigalye@321'; //PUT PASSWORD


        // Recipients
        $mail->setFrom($to, $name); 
        $mail->addAddress($to);

        // Content
        $mail->Subject = $subject;
        $mail->Body = $message_body;

        $mail->send();
        http_response_code(200); // Set HTTP status code to 200 for success
        echo "Email sent successfully.";
    } catch (Exception $e) {
        http_response_code(500); // Set HTTP status code to 500 for internal server error
        echo "Email sending failed. Error: {$mail->ErrorInfo}";
    }
} else {
    http_response_code(400); // Set HTTP status code to 400 for bad request
    echo "Invalid request.";
}
?>
