<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="logo">
        
            <div class="logo">
                <img src="./flat-color-icons_reading.png">
            </div>
       
    </div>
    <header class="header">
        Create Account
    </header>
    <div class="create-account">
    <form action="register_process.php" method="POST">
        <input type="text" name="first_name" placeholder="First Name" required><br>
        <input type="text" name="last_name" placeholder="Last Name" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="password" name="confirm_password" placeholder="Confirm Password" required><br>
        <div>
            <input type="submit" value="Create Account" class="button">
            </div>
        <a href="./login.php"><p>Already have an account? Sign in here</p></a>
    </form>
    </div>
</body>
</html>
