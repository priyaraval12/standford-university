<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject = $_POST['subject'];
$message=$_POST['message'];

$email_from='priyanshiraval26@gmail.com';

$email_subject='New Form Submission';

$email_body="user name: $name.\n".
            "user Email:$visitor_email./n.
			"Subject:$subject.\n".
			"user Message:$message.\n";
			
$to='ravalpriyanshiraval@gmail.com';

$header=  "From: $email_form \r\n";

$headers.="reply-to:$visitor_email \r\n";
mail($to,$email_subject , $email_body, $headers);

header("Location:contact.html");



?>