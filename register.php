<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="styelesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>





 <?php 

include "./db/db.php";

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Retrieve and sanitize user input
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $user_type = $conn->real_escape_string($_POST['user_type']);

    // Check if passwords match
    if ($password != $cpassword) {
        echo "<script>alert('Passwords do not match.');</script>";
    } else {
        // Hash the password for security
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        // Prepare statement to insert user
        $stmt = $conn->prepare("INSERT INTO `usertb` (name, email, password, user_type) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $hashed_password, $user_type);
        
        // Execute and check for errors
        if ($stmt->execute()) {
            echo "<script>alert('Registration successful!');</script>";
        } else {
            echo "<script>alert('Error: " . $stmt->error . "');</script>";
        }
        
        $stmt->close();
    }
}




 ?> 


   <div class="register-form">
    <form action="" method="post">
           <h3>Register</h3>
           <input type="text" name="name" placeholder="enter your name" required class="box">
           <input type="email" name="email" placeholder="enter your email" required class="box">
           <input type="password" name="password" placeholder="enter your password" required class="box">
           <input type="password" name="cpassword" placeholder="confirm your password" required class="box">
           <select name="user_type" class="user">
               <option value="user">user</option>
               <option value="admin">admin</option>
           </select>
           <input type="submit" name="submit" value="register now" class="btn3"></a>
           <p>already have an account? <a href="login.php">login now</a><p>
          
      </form>
   </div>

    
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>