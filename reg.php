<?php
include("./connection.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize form data
    $full_name = $conn->real_escape_string($_POST['full_name']);
    $dob = $conn->real_escape_string($_POST['dob']);
    $gender = $conn->real_escape_string($_POST['gender']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $address = $conn->real_escape_string($_POST['address']);
    $class = $conn->real_escape_string($_POST['class']);
    $uname = $conn->real_escape_string($_POST['uname']);
    
    // Hash the password
    $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);

    // Prepare an SQL statement
    $sql = "INSERT INTO students (full_name, dob, gender, email, phone, address, class, uname, pass)
            VALUES ('$full_name', '$dob', '$gender', '$email', '$phone', '$address', '$class', '$uname', '$pass')";

    // Execute the query and check for errors
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Login Done Sucessfully');</script>";
        header("Location: ./index.php");
        // Redirect to a success page if desired
        // header("Location: success.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
