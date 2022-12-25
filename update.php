<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $db = 'dbbookstore';

    // Create connection
    $conn = mysqli_connect($host, $username, $password, $db);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql =  "UPDATE `books` SET `title`= ?,`price`=? WHERE id = ?";

    $title = 'Intorduction to Python Machine Learning';
    $price = 45.99;
    $id = 27;

    $stmt  = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param($stmt, 'sdi', $title, $price, $id);

    if(mysqli_stmt_execute($stmt)) {
        echo "<br />Book record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }