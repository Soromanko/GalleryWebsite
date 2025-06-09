<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $suggestion = htmlspecialchars($_POST['suggestion']);

    $to = "samuel.soroman@email.cz";

    $subject = "New Suggestion from $name";
    $message = "Name: $name\n";
    $message .= "Email: $email\n\n";
    $message .= "Suggestion:\n$suggestion";

    $headers = "From: $email" . "\r\n" .
        "Reply-To: $email" . "\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you! Your suggestion has been sent.";
    } else {
        echo "Sorry, something went wrong. Please try again later.";
    }
} else {
    header("Location: index.html");
    exit();
}
