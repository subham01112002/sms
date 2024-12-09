<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer - Student Management System</title>
    <link rel="icon" href="img/logo.png" type="image/x-icon">
    <style>
        /* Inline CSS for the footer styling */
        .footer {
            background-color: #f9f9f9; /* Light white color */
            padding: 20px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
            margin-top: 20px; /* Space between footer and content above */
        }
        .footer .nav {
            display: flex;
            gap: 20px;
            margin-bottom: 10px; /* Space below navigation links */
        }
        .footer .nav a {
            text-decoration: none;
            color: #333;
            font-size: 16px;
            transition: color 0.3s; /* Smooth transition for color change */
        }
        /* Hover effect for footer navigation links */
        .footer .nav a:hover {
            color: #007bff; /* Change to blue on hover */
        }
        .footer .copyright {
            font-size: 14px;
            color: #666;
            margin-top: 10px; /* Space above copyright text */
        }
    </style>
</head>
<body>

<div class="footer">
    

    <!-- Copyright Notice -->
    <div class="copyright">
        &copy; <?php echo date("Y"); ?> Student Management System. All rights reserved.
    </div>
</div>

</body>
</html>
