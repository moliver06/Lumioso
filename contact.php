<?php 
 
 $to = "morgan.oliver067@gmail.com";
 $name = $_REQUEST['Name'];
 $email = $_REQUEST['Email'] ;
 $subject = $_REQUEST['Subject'] ;
 $message = $_REQUEST['Message'] ;
$headers = "From: $name <$email> \r\n";
$headers .= "X-Mailer:PHP\r\n";
$headers .= "MIME-Version:1.0\r\n";
$headers .= "Content-type:text/html; charset=iso-8859-1\r\n";
 $sent = mail($to, $subject, $message, $headers) ; 
 
 if($sent) {
	header("Location:contact.html");
 	}else {
	print "We encountered an error sending your mail. Please go back and try again."; 
 } 
 
 ?> 