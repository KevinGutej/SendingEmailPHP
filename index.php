<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $to = "user_email@example.com";
    $subject = "Subject: ";
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n\n";
    $email_message .= "Message:\n$message";
    $mailSent = mail($to, $subject, $message);

    $success = mail($to, $subject, $email_message);

    if ($success) {
        echo "Email successfully sent!";
    } else {
        echo "Problem with sending message!";
    }
} else {
    header("Location: index.html");
    exit();
}
?>
