<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    // Handle password reset, e.g., send an email or display a message
    echo "Password reset instructions sent to $username.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password Transporter</title>
    <style>
        body {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            background-color: #f5f5f5;
        }
        .container {
            padding: 80px;
            margin: 0 auto;
            width: 80%;
            height: 200px;
            text-align: center;
            
        }
        .form-group {
          padding: 50px;
        }
        label {
            font-size: 18px;
            font-weight: bold;
        }
        input {
            width: 200px;
            height: 20px;
            border-radius: 4px;
            outline: none;
        }
        .reset-btn {
            width: 200px;
            height: 50px;
            font-size: 20px;
            cursor: pointer;
            border-radius: 20px;
            outline: none;
            border: 1px solid black;
            background-color: #054094;
        }
        .reset-btn:hover {
            background-color: hwb(211 0% 30%);
            transition: ease-out 0.3s;
        }
    </style>
</head>
<body>
<div class="container">
        <form action="forgot_password_transporter.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <button type="submit" class="reset-btn">Reset Password</button>
        </form>
    </div>
</body>
</html>


