<?php
$to = "testmail@gmail.com";
$subject = 'Email Configuration';


$headers = "From: scrum <do-not-reply@72071.aoweb.nl> \r\n";
$headers .= "Reply-To: do-not-reply@72071.aoweb.nl\r\n";
$headers .= "CC: \r\n";
$headers .= "BCC: \r\n";

// message style
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$headers .= "Return-Path: myplace@example.com\r\n";

$message = "mail template";

mail($to, $subject, $message, $headers);

echo "Registration Complete! Please confirm your email";