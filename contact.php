<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // Check if all fields are filled
    if (empty($name) || empty($email) || empty($message)) {
        echo "All fields are required.";
        exit();
    }

    // Validate email address
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address.";
        exit();
    }

    // Add code to process the form data here (e.g., send an email, save to a database, etc.)
    // For example, sending an email
    $to = "zoesobowale@gmail.com";
    $subject = "Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    mail($to, $subject, $body);

    // If sending email is successful
    echo "success";

} else {
    echo "Invalid request.";
}
?>

