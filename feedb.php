<?php
ini_set("SMTP", "mail.vit.ac.in");
ini_set("SMTP_port", "25");
$from=ini_set("sendmail_from", $_POST['email']);

$to = "akunurisri.chander2020@vitstudent.ac.in";
$subject = "Review Comment";
$message = "Hello! This is ".$_POST['name'].".My comment is: ".$_POST['comm'];
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);

?> 
