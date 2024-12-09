<?php
include("./connection.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize form data
    $username = $conn->real_escape_string($_POST['username']);
    $password = $_POST['password'];

    // Prepare SQL statement to fetch user data
    $sql = "SELECT * FROM students WHERE uname = '$username'";
    $result = $conn->query($sql);

    // Check if user exists
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        
        // Verify the password
        if (password_verify($password, $row['pass'])) {
            echo "<script>alert('Login Done Successfully');</script>";
            // Redirect to a welcome page or dashboard if desired
           // header("location: index.php");
            exit();
        } else {
            echo "<script>alert('Incorrect Password');</script>";
        }
    } else {
        echo "<script>alert('User not found');</script>";
    }
}

// Close the connection
$conn->close();
?>
