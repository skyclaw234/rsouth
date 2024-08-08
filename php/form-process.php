<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['p_name'];
    $email = $_POST['p_email'];
    $subject = $_POST['p_subject'];
    $message = $_POST['p_message'];

    $to = 'brantsafrit@gmail.com';
    $subject = "Contact Form Submission: " . $subject;
    $body = "Name: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message\n";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
} else {
    echo "Invalid request method.";
}
?>