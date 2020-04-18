<?php
require "web.config.php";


if ($HTTP_SERVER_VARS['REQUEST_METHOD'] != "POST") {
    header("location: contact.php");
}
    $email =  trim($_POST[email]);

    $mailto = $contactFormEmail;
    $subject = "Contact Form from Website";
    $header = "From: $email";
    
    $contactName =  trim($_POST[contactName]);
    $phoneNumber =  trim($_POST[phoneNumber]);
    $Comments = trim(stripslashes($_POST[Comments]));

    $message = "Contact Name: " . $contactName . "\n";
    $message .= "Email Address : " . $email . "\n";
    $message .= "Phone Number : " . $phoneNumber . "\n";
    $message .= "Comments : " . $Comments . "\n";
    
if ($contactName != "" && $email != "" && $phoneNumber != "") {
    mail($mailto, $subject, $message, $header);
}

    header("location: contact_success.php");
