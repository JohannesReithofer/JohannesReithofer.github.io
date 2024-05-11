<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "teamgreen@aon.at";
    $subject = "New Message from Contact Form";
    $headers = "From: $email";

    $body = "Name: $name\n";
    $body.= "Email: $email\n";
    $body.= "Message: $message\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message successfully sent!";
    } else {
        echo "Message delivery failed.";
    }
}
?>
