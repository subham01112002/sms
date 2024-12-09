<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System - Home</title>
    <!-- Favicon -->
    <link rel="icon" href="img/logo.png" type="image/x-icon">
    <style>
        /* Inline CSS for page styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        h2 {
            text-align: center;
            margin-top: 20px;
        }
        .banner {
        width: 100%;
        overflow: hidden;
    }
    .banner img {
        width: 100%;
        height: auto; /* Maintains aspect ratio */
        display: block; /* Removes any spacing around the image */
    }
        .banner-text {
            position: flex;
            top: 80%;
            left: 80%;
            
            color: #fff;
        }
        .section {
            padding: 40px 20px;
            text-align: center;
        }
        .about {
            display: flex;
            align-items: center;
            gap: 20px;
            max-width: 800px;
            margin: 0 auto;
        }
        .about img {
            width: 100%;
            max-width: 300px;
            border-radius: 8px;
        }
        .services, .team, .contact-form {
            max-width: 800px;
            margin: 0 auto;
        }
        .team img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
        }
        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .contact-form button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .contact-form button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<?php include 'header.php'; ?>

<h2>Student Management-Empowering Education for the Future</h2>

<!-- Banner Section -->
<div class="banner">
    <img src="img/home.jpg" alt="Banner Image">
    
</div>

<!-- About Us Section -->
<div class="section about">
    <img src="img/aboutus.jpeg" alt="About Us">
    <div>
        <h2>About Us</h2>
        <p>We are dedicated to providing a comprehensive system to help educational institutions manage student information with ease.</p>
    </div>
</div>

<!-- Our Services Section -->
<div class="section services">
    <h2>Our Services</h2>
    <p>Explore our wide range of services designed to simplify student management:</p>
    <ol>
        <li>Student Enrollment and Records</li>
        <li>Attendance Tracking</li>
        <li>Grade Management</li>
        <li>Timetable Scheduling</li>
        <li>Reporting and Analytics</li>
    </ol>
</div>

<!-- Meet Our Team Section -->
<div class="section team">
    <h2>Meet Our Team</h2>
    <div style="display: flex; justify-content: center; gap: 20px; flex-wrap: wrap;">
        <div>
            <img src="img/uzma.jpeg" alt="Team Member">
            <p>John Doe - CEO</p>
        </div>
        <div>
            <img src="img/uzma.jpeg" alt="Team Member">
            <p>Jane Smith - Project Manager</p>
        </div>
        <div>
            <img src="img/uzma.jpeg" alt="Team Member">
            <p>Emily Johnson - Lead Developer</p>
        </div>
        <div>
            <img src="img/uzma.jpeg" alt="Team Member">
            <p>Michael Brown - UI/UX Designer</p>
        </div>
        <div>
            <img src="img/uzma.jpeg" alt="Team Member">
            <p>Sarah Williams - QA Engineer</p>
        </div>
    </div>
</div>

<!-- Contact Us Form -->
<div class="section contact-form">
    <h2>Contact Us</h2>
    <form action="contact_process.php" method="POST">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <input type="text" name="subject" placeholder="Subject" required>
        <textarea name="message" placeholder="Your Message" rows="4" required></textarea>
        <button type="submit">Submit</button>
    </form>
</div>

<?php include 'footer.php'; ?>

</body>
</html>
