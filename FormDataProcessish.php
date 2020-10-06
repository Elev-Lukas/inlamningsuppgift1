<?php
$min_email = "info@lukas.nu";

$thankyou= "tackarrr.html";

$email_address = $_REQUEST['email'] ;
$comments = $_REQUEST['message'] ;
$first_name = $_REQUEST['name'] ;
$msg = 
"Personens namn: " . $first_name . "\r\n" . 
"Email: " . $email_address . "\r\n" . 
"Meddelande: " . $comments ;

mail( "$min_email", "Detta inkom från Kba siten", $msg );
header( "Location: $thankyou" );

?>