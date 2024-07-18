<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // Here, insert into your database
    echo "Generator/Receiver registered successfully.";
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Generator/Receiver</title>
    <style>
        body {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            background-color: #f5f5f5;
        }
        .container {
            padding: 120px;
            margin: 0 auto;
            width: 80%;
            height: 200px;
            text-align: center;
            
        }
        .form-group {
          padding: 20px;
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
        .reg-btn {
            width: 140px;
            height: 50px;
            font-size: 20px;
            font-weight: bold;
            cursor: pointer;
            border-radius: 20px;
            outline: none;
            border: 1px solid black;
            background-color: #1f64c6;
        }
        .reg-btn :hover {
            background-color: hwb(211 0% 30%);
            transition: ease-in-out 0.3s;
        }
    </style>
</head>
<body>
<div class="container">

<form action="register_generator.php" method="post">
    <div class="form-group">
        <label for="username" class="user">Username</label>
        <input type="text" id="username" name="username" required>
    </div>
    <div class="form-group">
        <label for="password" class="pass">Password</label>
        <input type="password" id="password" name="password" required>
    </div>
    <button type="submit" class="reg-btn">Register</button>
</form>
</div>
</body>
</html>


