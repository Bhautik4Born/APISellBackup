<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $otp = filter_input(INPUT_POST, 'otp', FILTER_SANITIZE_NUMBER_INT);

    if ($otp == $_SESSION['otp']) {
        unset($_SESSION['otp']);
        unset($_SESSION['email']);

        // Display an alert and redirect to the specified page
        echo '<script>';
        echo 'alert("OTP verification succeeded. You can now log in.");';
        echo 'window.location.href = "https://wordpress-919074-3190244.cloudwaysapps.com/download-simlpesnmptclredha-confirmation/";';
        echo '</script>';
        exit;
    } else {
        $error_message = 'Invalid OTP';
    }
}
?>
