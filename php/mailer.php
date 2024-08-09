<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = 'your_email@example.com';
  $subject = 'New Message from Website';

  $headers = 'From: ' . $email . "\r\n" .
             'Reply-To: ' . $email . "\r\n" .
             'X-Mailer: PHP/' . phpversion();

  $mail_body = "Name: $name\nEmail: $email\nMessage: $message";

  if (mail($to, $subject, $mail_body, $headers)) {
    echo 'Message sent successfully!';
  } else {
    echo 'Error sending message!';
  }
?>