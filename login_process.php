<?php
require_once('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        // Start a session to store user information
        session_start();
        $_SESSION['user_id'] = $user['id']; // Store the user's ID in the session

        // Redirect to the Bible tracker page
        header('Location: bibletracker.php');
        exit;
        
    } else {
        echo "Login failed. Invalid email or password.";
    }
}
?>