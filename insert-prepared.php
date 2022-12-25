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

    $title = 'Learning Python for beginners';
    $desc = 'A book on Python Programming';
    $author = 'author'; 
    $price = '50.0';
    $isbn = '123-ABZ-980'; 
    $cateory = 'programming';
    $created = '2022-12-18 16:56:35';
    $published = '2022-12-18 00:00:00';

    $stmt  = mysqli_prepare($conn,"INSERT INTO books (`title`, `description`, `author_name`, `price`, `ISBN`, 
                `category`, `date_created`, `date_published`) VALUES (?, ? ,?, ?, ?, ?, ?, ?) ");

    mysqli_stmt_bind_param($stmt,'sssdssss', $title, $desc, $author, $price, $isbn, $cateory, $created, $published);
    
    if(mysqli_stmt_execute($stmt)) {
        echo "<br />New record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }