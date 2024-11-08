<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Use null coalescing to prevent undefined array key warnings
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    // Check if essential fields are empty
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        echo "Please fill in all fields.";
        exit;
    }

    $to = "janthonysandiego@gmail.com"; 
    $headers = "From: " . $email;
    $body = "Name: $name\nEmail: $email\n\n$message";

    // Check if mail() is available, otherwise inform the user
    if (function_exists('mail')) {
        if (mail($to, $subject, $body, $headers)) {
            echo "Message sent successfully!";
        } else {
            echo "Failed to send message.";
        }
    } else {
        echo "Mail function is not available on this server.";
    }
}
?>
