<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$email_from = 'deepanshi.tomar2004@gmail.com';
$email_subject = 'new form submission';
$email_body = "user name: $name.\n" .
    "user email: $email.\n" .
    "user subject: $subject.\n" .
    "user message: $message.\n";
$to = "tomar.deepanshi2003@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "reply to: $email\r\n";
mail($to, $email_subject, $email_body, $headers);
header("location:contact.html");
?>