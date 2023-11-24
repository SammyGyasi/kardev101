<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "samuel@creatiftech@gmail.com.com"; // Replace with your email address

    $subject = "New Form Submission";

    $message = "First Name: " . $_POST["firstName"] . "\n";
    $message .= "Last Name: " . $_POST["lastName"] . "\n";
    $message .= "Phone Number: " . $_POST["phoneNumber"] . "\n";
    $message .= "Email: " . $_POST["email"] . "\n";
    $message .= "Country: " . $_POST["country"] . "\n";
    $message .= "Passport Number: " . $_POST["passportNumber"] . "\n";
    $message .= "Job Title: " . $_POST["jobTitle"] . "\n";
    $message .= "Entity/Organisation: " . $_POST["organization"] . "\n";
    $message .= "Organization Country: " . $_POST["organizationCountry"] . "\n";

    $headers = "From: Contact@africamedforum.com"; // Replace with your email address
    
    // Send the email
    mail($to, $subject, $message, $headers);
}
?>
