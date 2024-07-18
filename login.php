<?php

session_start();

// Dummy credentials for demonstration purposes
$valid_username = "Ram";
$valid_password = "123456";
$valid_captcha = "j7h5As";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $entered_captcha = $_POST['enter-captcha'];

    // Validate captcha
    if ($entered_captcha !== $valid_captcha) {
        echo "Invalid captcha. Please try again.";
    } 
    else {
        // Validate credentials
        if ($username === $valid_username && $password === $valid_password) {
            $_SESSION['username'] = $username;
            header("Location: welcome.php");
            exit();
        } 
        else {
            echo "Invalid username or password. Please try again.";
        }
    }
}



?>