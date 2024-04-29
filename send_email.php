<?php
// Include Composer's autoloader
require 'vendor/autoload.php';

// Create a new PHPMailer instance
$mail = new PHPMailer\PHPMailer\PHPMailer();
// Set admin email address
$admin_email = 'seetharaji799@gmail.com'; // Change this to your admin's email address

// Check if all form fields are set
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Compose email message
    $subject = 'New message from ' . $name;
    $body = "Name: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message";

    // Set additional headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send email
    if (mail($admin_email, $subject, $body, $headers)) {
        echo 'success'; // Send success response back to jQuery
    } else {
        echo 'error'; // Send error response back to jQuery
    }
} else {
    echo 'error'; // Send error response if form fields are not set
}
?>
