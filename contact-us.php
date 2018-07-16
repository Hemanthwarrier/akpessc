
<?php
if (isset ( $_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $formcontent="From: $name \n Message: $message";
  $recipient = "shaneapen@gmail.com";
  $subject = "AKPESSC Contact Form";
  $mailheader = "From: $email \r\n";
  mail($recipient, $subject, $formcontent, $mailheader) or die("Error sending email!");
  echo "Thank You!";
}
?>
