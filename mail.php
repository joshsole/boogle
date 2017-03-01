<?php


$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['feedback'];
$formcontent=" From: $name \n Email: $email \n Phone: $phone \n Message: $message";
$recipient = "jdubsole@gmail.com";
$subject = "Website Form Submission";
$mailheader = "From: $email \r\n";
mail ($recipient, $subject, $formcontent, $mailheader) or die ("error");
// header('Location: thanks.php');
// exit();
require 'thanks.php';