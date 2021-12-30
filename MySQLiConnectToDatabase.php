<?php
    $servername = "localhost";
    $username = "username";
    $password = "password";

    $conn = new mysqli($servername, $username, $password);

    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }
    echo "Connected Successfully";



