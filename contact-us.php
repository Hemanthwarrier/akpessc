<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $formcontent="From: $name \n Message: $message";
  $recipient = "akpessc@gmail.com";
  $subject = "AKPESSC Contact Form";
  $mailheader = "From: $email \r\n";
  mail($recipient, $subject, $formcontent, $mailheader) or die("Error sending email!");
  echo "success";
}
?>
