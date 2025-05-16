<!-- WAP to Send a Mail  -->

<?php
$to = "example@example.com";
$subject = "Test Mail";
$message = "This is a test email.";
$headers = "From: sender@example.com";

if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully.";
} else {
    echo "Failed to send email.";
}
?>