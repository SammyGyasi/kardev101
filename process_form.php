<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the keys exist in the $_POST array before accessing them
    $firstName = isset($_POST["firstName"]) ? $_POST["firstName"] : "";
    $lastName = isset($_POST["lastName"]) ? $_POST["lastName"] : "";
    $phoneNumber = isset($_POST["phoneNumber"]) ? $_POST["phoneNumber"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $country = isset($_POST["country"]) ? $_POST["country"] : "";
    $passportNumber = isset($_POST["passportNumber"]) ? $_POST["passportNumber"] : "";
    $jobTitle = isset($_POST["jobTitle"]) ? $_POST["jobTitle"] : "";
    $organization = isset($_POST["organization"]) ? $_POST["organization"] : "";
    $organizationCountry = isset($_POST["organizationCountry"]) ? $_POST["organizationCountry"] : "";

    $to = "samuel.creatiftech@gmail.com.com"; // Replace with your email address
    $subject = "New Form Submission";

    $message = "First Name: $firstName\n";
    $message .= "Last Name: $lastName\n";
    $message .= "Phone Number: $phoneNumber\n";
    $message .= "Email: $email\n";
    $message .= "Country: $country\n";
    $message .= "Passport Number: $passportNumber\n";
    $message .= "Job Title: $jobTitle\n";
    $message .= "Entity/Organisation: $organization\n";
    $message .= "Organization Country: $organizationCountry\n";

    $headers = "From: webmaster@example.com"; // Replace with your email address

    // Attempt to send the email
    if (mail($to, $subject, $message, $headers)) {
        echo 'Email sent successfully!';
    } else {
        // Display an error message on the form page
        echo 'Error sending email..';
    }
}
?>
