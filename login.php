<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="styleLogin.css">
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
      feather.replace();
    </script>
</head>
<body>
<div class="login-container">
        <form action="verif.php" method="POST" class="login-form">
            <h2>Login</h2>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="login-btn">Login</button>
            <p class="register-link">
                Don't have an account? <a href="register.html">Register here</a>.
            </p>
        </form>
    </div>
</body>
</html>