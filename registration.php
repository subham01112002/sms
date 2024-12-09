<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="img/logo.png" type="image/x-icon">
    <title>Student Registration Form</title>
    <link rel="stylesheet" href="regpg.css" />
  </head>
  <body>
    <?php include('header.php');?>
    <div class="container">
      <form action="reg.php" method="POST">
        <header><h2>Registration Form</h2></header>
        <table>
          <tr>
            <td><label for="full_name">Full Name:</label></td>
            <td>
              <input type="text" id="full_name" name="full_name" required />
            </td>
          </tr>
          <tr>
            <td><label for="dob">Date of Birth:</label></td>
            <td><input type="date" id="dob" name="dob" required /></td>
          </tr>
          <tr>
            <td><label for="gender">Gender:</label></td>
            <td>
              <select id="gender" name="gender" required>
                <option value="">SELECT</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
              </select>
            </td>
          </tr>
          <tr>
            <td><label for="email">Email:</label></td>
            <td><input type="email" id="email" name="email" required /></td>
          </tr>
          <tr>
            <td><label for="phone">Phone Number:</label></td>
            <td><input type="tel" id="phone" name="phone" required /></td>
          </tr>
          <tr>
            <td><label for="address">Address:</label></td>
            <td>
              <textarea
                id="address"
                name="address"
                rows="3"
                required
              ></textarea>
            </td>
          </tr>
          <tr>
            <td><label for="class">Class:</label></td>
            <td>
              <select id="class" name="class" required>
                <option value="">SELECT</option>
                <option value="Class 5">Class 5</option>
                <option value="Class 6">Class 6</option>
                <option value="Class 7">Class 7</option>
                <option value="Class 8">Class 8</option>
                <option value="Class 9">Class 9</option>
                <option value="Class 10">Class 10</option>
                <option value="Class 11">Class 11</option>
                <option value="Class 12">Class 12</option>
              </select>
            </td>
          </tr>
          <tr>
            <td><label for="uname">Set Username:</label></td>
            <td><input type="text" id="uname" name="uname" required /></td>
          </tr>
          <tr>
            <td><label for="pass">Set Password:</label></td>
            <td><input type="password" id="pass" name="pass" required /></td>
          </tr>
          <tr>
            <td colspan="2" style="text-align: center">
              <button type="submit">Register</button>
            </td>
          </tr>
        </table>
        <p>
          By clicking the Register button,you agree to our<br />
          <a href="#">Terms and Conditions</a>and <a href="#">Policy Privacy</a>
        </p>
        <p>Already have an account? <a href="login.php">Login here</a></p>
      </form>
    </div>
    <?php include('footer.php');?>
  </body>
</html>
