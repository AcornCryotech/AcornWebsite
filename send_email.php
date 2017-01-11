<?php
  echo($_POST);
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $email_from = 'acorncryotech@gmail.com';
 
  $email_subject = "New Form submission";
 
  $email_body = "You have received a new message from the user $name, with subject line $subject.\n".
                            "Here is the message:\n $message \n".
 
  $to = "acorncryotech@gmail.com";
 
  $headers = "From: acorncryotech@gmail.com \r\n";
 
  $headers .= "Reply-To: $visitor_email \r\n";
 
  mail($to,$email_subject,$email_body,$headers);
?>