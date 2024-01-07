<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  $to = "shikhabhatt1999@gmail.com"; // Replace with your email address
  $subject = "New Form Submission";
  $messageBody = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message";

  mail($to, $subject, $messageBody);
}
?>
