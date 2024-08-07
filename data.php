<?php
$name = $_POST['name'];
$visitor_email= $_POST['emaail'];
$subject= $_POST['subject'];

$email_from   = 'valisettyswetha@gmail.com';

$email_subject = 'new form submission';

$email_body  = "User Name: $name.\n";
               "User Name : $visitor_email.\n";
               "User Name : $subject.\n";

$to = 'sivamanich1999@gmail.com';
 $headers = "From: $email_from \r\n";

 $headers = "Reply-To: visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers)

header("location: contact.html");
?>
