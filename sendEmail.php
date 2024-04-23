

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = 'shikhabhatt1999@gmail.com'; // Replace this with your email
  $subject = 'New Message from Contact Form';
  $body = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message";

  if (mail($to, $subject, $body)) {
    http_response_code(200);
  } else {
    http_response_code(500);
  }
} else {
  http_response_code(403);
}
?>
