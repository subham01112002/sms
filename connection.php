<?php
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "root"; // Use your MySQL password
    $dbname = "student_registration"; // Change to your database name

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>