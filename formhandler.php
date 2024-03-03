<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject']; 
$message=$_POST['message'];

$email_from= "freekapathsala.pp.ua";//youre  mail@domain.com
$email_subect='New From Submission'
$email_body="User name: $name.\n".
            "User Email: $visitor_email.\n".
            "Subject:$subject.\n";

$to  = 'rajakumarmehta2001@gmail.com'; //replace with your email address
$headers = "From:'.$email_from \r\n";

$headers.="Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body, $headers);

heaser("Location: contact.html");












?>