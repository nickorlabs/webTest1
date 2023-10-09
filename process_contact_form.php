<?php
$recaptchaSecretKey = "6LcyI2ooAAAAAEKuSVT7Q-CEYO7QLl1tU-BmQPAt"; // Replace with your secret key
$response = $_POST['g-recaptcha-response'];

$verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptchaSecretKey&response=$response");
$captcha_success = json_decode($verify);

if ($captcha_success->success == true) {
    // The reCAPTCHA verification was successful.
    // Process the form data here.
    // Retrieve form data using $_POST['fieldname']
    // Perform any necessary actions (e.g., sending emails)

    // Example:
    $name = $_POST['name'];
    $email = $_POST['email'];
    $company = $_POST['company'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // You can process the form data or send it to an email address.
    // Add your code here...

    // Display a "Thank you" message
    echo '<p class="text-success">Thank you for your submission!</p>';
} else {
    // The reCAPTCHA verification failed.
    // Display an error message.
    echo '<p class="text-danger">reCAPTCHA verification failed. Please try again.</p>';
}
?>
