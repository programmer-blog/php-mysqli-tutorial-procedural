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

    $id = 27;
    $sql = "DELETE FROM books where id = ?";

    $stmt = mysqli_prepare($conn, $sql);
    
    mysqli_stmt_bind_param($stmt, 'i', $id);

    if(mysqli_stmt_execute($stmt)) {
        echo "<br />Record deleted successfully.";
    } else {
        echo "<br/>Error in record deletion. Please try again";
    }