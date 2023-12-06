<?php
require_once('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validate the form data (e.g., check if passwords match, validate email format)
    if ($password !== $confirm_password) {
        echo "Passwords do not match. Please try again.";
    } else {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert user data into the database
        $sql = "INSERT INTO users (first_name, last_name, email, password, confirm_password) VALUES (?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        if ($stmt->execute([$first_name, $last_name, $email, $hashed_password, $confirm_password])) {
            header('Location: bibletracker.php');
            exit;
        } else {
            echo "Registration failed. Please try again.";
        }
    }
}

?>
