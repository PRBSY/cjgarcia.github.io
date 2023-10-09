<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['contact_name'];
    $email = $_POST['contact_email'];
    $message = $_POST['contact_message'];

    // Set your email address where you want to receive the form submissions
    $to = "christian.jgarcia03@gmail.com"; // Replace with your email address
    $subject = "Contact Form Submission from $name";
    $headers = "From: $email";
    $message_body = "Name: $name\nEmail: $email\nMessage:\n$message";

    // Send email
    if (mail($to, $subject, $message_body, $headers)) {
        // Email sent successfully
        header("Location: thank_you.html"); // Replace with the actual thank-you page URL
        exit;
    } else {
        // Email sending failed
        echo "Error: Email sending failed. Please try again later.";
    }
}
?>
