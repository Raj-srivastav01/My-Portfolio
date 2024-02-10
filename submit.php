<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set recipient email address
    $to = "srivastavraj68@gmail.com"; // Change this to your email address

    // Set email subject
    $subject = "New message from $name";

    // Build the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message:\n$message\n";

    // Set email headers
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $email_message, $headers)) {
        // Email sent successfully
        echo "<p>Thank you! Your message has been sent.</p>";
    } else {
        // Failed to send email
        echo "<p>Oops! Something went wrong and we couldn't send your message.</p>";
    }
} else {
    // Redirect back to the contact page if accessed directly
    header("Location: index.html");
}
?>
