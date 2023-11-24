<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the keys exist in the $_POST array before accessing them
    $name = isset($_POST["name"]) ? $_POST["name"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $subject = isset($_POST["subject"]) ? $_POST["subject"] : "";
    $message_content = isset($_POST["message"]) ? $_POST["message"] : "";

    $to = "samuel.creatiftech@gmail.com"; // Replace with your email address
    $subject = "New Contact Form Submission";

    $message = "You have received a new message from the contact form:\n";
    $message .= "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Subject: $subject\n";
    $message .= "Message:\n$message_content\n";

    $headers = "From: $email"; // Use the sender's email as the "From" address

    // Attempt to send the email
    if (mail($to, $subject, $message, $headers)) {
        echo 'Email sent successfully!';
    } else {
        // Display an error message on the form page
        echo 'Error sending email..';
    }
}
?>
