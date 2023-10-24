<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Add code to process the form data here (e.g., send an email, save to a database, etc.)

    // For example, sending an email
    $to = "youremail@example.com";
    $subject = "Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    // Uncomment the following line to send the email
    // mail($to, $subject, $body);

    // Redirect the user to a thank you page
    header("Location: thank-you.html");
    exit();
}
?>
