<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
echo "this is pgp";

if(empty($name)||empty($email)||empty($message))
{
    header("Location:contact_form.html?error=empty");
    exit();
}
  // Send email
  $to = "@gmail.com"; // Replace with your email address
  $subject = "Contact Form Submission";
  $body = "Name: $name\nEmail: $email\n\n$message";
  $headers = "From: $email";
  if (mail($to, $subject, $body, $headers)) 
{
    header("Location: thank_you.html");
    exit();
} 
else 
{
    echo "Failed to send email. Please try again later.";
}
}

?>