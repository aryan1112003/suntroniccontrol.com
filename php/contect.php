<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Send email
$to = 'your_email@example.com';
$subject = 'Contact Form Submission';
$body = "Name: $name\nEmail: $email\nMessage: $message";
$headers = 'From: ' . $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $body, $headers);

echo 'Thank you for contacting us!';
?>