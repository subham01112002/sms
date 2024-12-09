<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="x-icon" href="img/logo.png" />
    <title>Login</title>
    <link rel="stylesheet" href="login.css" />
  </head>
  <body>
    <?php include('header.php'); ?>

    <div class="login">
      <form action="login1.php" method="post">
        <h2>Login</h2>
        <input
          type="text"
          name="username"
          placeholder="Username"
          required
        /><br />
        <input
          type="password"
          name="password"
          placeholder="Password"
          required
        /><br />
        <input type="submit" value="Login" />

        <p>Don't have any account? <a href="registration.php">Register</a></p>
      </form>
    </div>

    <!-- Footer Section -->
    
  </body>
</html>
