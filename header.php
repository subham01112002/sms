<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <!-- Favicon -->
    <link rel="icon" href="img/logo.png" type="image/x-icon">
    <style>
        /* Inline CSS for the header styling */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .header {
            background-color: #f9f9f9; /* Light white color */
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .logo {
            display: flex;
            align-items: center;
        }
        .logo img {
            width: 60px;
            height: 60px;
            margin-right: 10px;
        }
        .logo-text {
            display: flex;
            flex-direction: column;
        }
        .logo-text h4 {
            margin: 0;
            font-size: 22px;
            color: #333;
        }
        .tagline {
            font-size: 14px;
            color: #666;
            margin-top: 4px;
        }
        .nav {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        .nav a {
            text-decoration: none;
            color: #333;
            font-size: 16px;
            transition: color 0.3s; /* Smooth transition for color change */
        }
        /* Hover effect for navigation links */
        .nav a:hover {
            color: #007bff; /* Change to blue on hover */
            text-decoration: underline; /* Adds underline on hover */
        }
        .buttons {
            display: flex;
            gap: 10px;
        }
        .buttons .btn {
            padding: 8px 16px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            font-size: 16px;
            transition: background-color 0.3s; /* Smooth transition for background color */
        }
        .buttons .btn:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }
    </style>
</head>
<body>

<div class="header">
    <!-- Logo and Tagline -->
    <div class="logo">
        <img src="img/logo.png" alt="Logo">
        <div class="logo-text">
            <h4>Student Management</h4>
            <div class="tagline">Empowering Education for the Future</div>
        </div>
    </div>

    <!-- Navigation Menu -->
    <div class="nav">
        <a href="index.php">Home</a>
        <a href="aboutus.php">About Us</a>
        <a href="contact.php">Contact Us</a>
        <a href="ourservices.php">Our Services</a>
     
    </div>

    <!-- Login and Signup Buttons -->
    <div class="buttons">
        <a href="login.php" class="btn">Login</a>
        <a href="registration.php" class="btn">Sign Up</a>
    </div>
</div>

</body>
</html>
