<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Add additional validation if needed

    $mailheader = "From:" . $name . "<" . $email . ">\r\n";
    $recipient = "nuskadesigns@gmail.com";

    if (mail($recipient, $subject, $message, $mailheader)) {
        header("Location: thank-you.php");
        exit();
    } else {
        echo "Error sending the email. Please try again.";
    }
}

?>
