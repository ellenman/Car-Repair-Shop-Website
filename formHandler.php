<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

//domain name
$email_from = 'garagelympianoi.com';

$email_subject = "New Form Submition";


$email_body = "User Name: $name.\n".
			"User email: $visitor_email.\n".
			"User subject: $subject.\n".
			"User message: $message.\n".;

$to = 'lympianoi@gmail.com'

$headers = "From: $email_from \r\n";

$headers .="Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);
header("Location: index.html");


?>