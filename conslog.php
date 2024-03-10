<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set up email parameters
    $to = "ryandimba8@gmail.com"; 
    $to = "gracemaina171@gmail.com"; 
    $subject = "New Appointment Request";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo "Your appointment request has been submitted successfully. We will get back to you shortly.";
    } else {
        echo "Sorry, there was an error submitting your appointment request. Please try again later.";
    }
} else {
    // If the form is not submitted, redirect to the homepage
    header("Location: index.html");
    exit;
}
?>