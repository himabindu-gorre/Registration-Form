<?php 
    $server = "localhost";
    $username = 'root';
    $password = "";
    $database = "register";

    $conn = mysqli_connect("$server", "$username", "$password");
  
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>
