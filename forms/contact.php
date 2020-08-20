<?php
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];
  $to = "jahidhasanjony48@gmail.com";
  $mail = "Name : ". $name ."\n"."Subject : ". $subject ."\n"."Message : ". $message ;
  if (isset($_POST["submit"])) {
    mail($to, $subject, $mail);
  }

?>
