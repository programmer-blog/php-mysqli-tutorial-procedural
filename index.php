<?php

    $host = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = mysqli_connect($host, $username, $password);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        echo "Database connection successfull";
    }
