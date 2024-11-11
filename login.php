<?php



session_start(); // Start the session.

// Include your database connection file
include "./db/db.php"; // Adjust the path as necessary.

// Initialize an error variable
$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];

    // Prepare a statement to select the user
    $stmt = $conn->prepare("SELECT * FROM usertb WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        // Verify password
        if (password_verify($password, $user['password'])) {
            // Prevent session fixation attacks
            session_regenerate_id();
            
            // Set user type session variable
            $_SESSION['user_type'] = $user['user_type'];

            // Determine redirection based on user type
            if ($user['user_type'] === 'user') {
                header("Location: Home.html");
                exit();
            } elseif ($user['user_type'] === 'admin') {
                header("Location: admin.php");
                exit();
            }
        } else {
            $error = "Invalid email or password.";
        }
    } else {
        $error = "User not found.";
    }
    $stmt->close();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
    body, html {
    height: 100%;
    margin: 0;
    font-family: Arial, sans-serif;
}

.container {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
    padding: 20px;
}

.row {
    background-color: #f2f2f2;
    border-radius: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    overflow: hidden;
    width: 100%;
    max-width: 400px;
}

h2 {
    color: #333;
    text-align: center;
    font-weight: 300;
    margin-bottom: 30px;
    margin-top: 30px;
}

.form-label {
    font-weight: bold;
    color: #555;
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
    width: 100%;
    padding: 10px;
    font-size: 18px;
    margin-top: 20px;
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #0056b3;
}

.mb-3 {
    margin-bottom: 1rem;
}

.alert-danger {
    color: #721c24;
    background-color: #f8d7da;
    border-color: #f5c6cb;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 20px;
}

input[type="email"], input[type="password"] {
    width: calc(100% - 20px);
    padding: 10px;
    margin: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

input[type="email"]:focus, input[type="password"]:focus {
    outline: none;
    border-color: #007bff;
    box-shadow: 0 0 0 2px rgba(0, 123, 255, 0.25);
}
</style>

</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <h2 class="text-center mb-4">Login</h2>
                <?php if(!empty($error)): ?>
                    <div class="alert alert-danger"><?php echo $error; ?></div>
                <?php endif; ?>
                <form method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

