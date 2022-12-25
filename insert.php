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

    //Insert record into database table - procedural way
    $sql = "INSERT INTO books (`title`, `description`, `author_name`, `price`, `ISBN`, `category`, 
    `date_created`, `date_published`) 
    
    VALUES ('Data Structures for beginners', 'A book on data structures for beginners', 'author', '50', 
    '123-ABZ-980', 'programming', '2022-12-18 16:56:35', '2022-12-18 00:00:00') ";
    
    if (mysqli_query($conn, $sql)) {
      echo "<br />New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }