<?php
$name = $_POST["ime"];
$visitor_email = $_POST["email"];
$subject = $_POST["predmet"];
$message = $_POST["poruka"];

$email_from = "sveuciliste@zagreb.hr";

$email_subject = "Nova poruka";

$email_body = "Ime: $name.\n".
              "Email: $visitor_email.\n".
              "Predmet: $subject.\n". 
              "Poruka: $message.\n";

$to = "totibod802@tenjb.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: kontakt.html");

?>
