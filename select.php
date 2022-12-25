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

    $sql = "SELECT id, title, price, author_name, category from books order by id desc limit 5";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        echo "<h2>Books Records</h2>";

        while($row = mysqli_fetch_assoc($result)) {
            echo "<br /> ID: ".$row['id']." Book Name: ".$row['title']." Author: ".$row['author_name'].
            " Category:".$row['category'];
        }
    } else {
        echo "No Record Found";
    }