<?php
session_start();

// Ensure the user is authenticated (you should have user sessions)
if (!isset($_SESSION['user_id'])) {
    ob_clean();
    echo json_encode(['error' => 'Unauthorized']);
    exit;
}

// Include your database connection code here
require_once('db.php');

// Get the user's ID from the session
$user_id = $_SESSION['user_id'];

try {
    // Check if the database connection is successful
    $pdo = new PDO("mysql:host=localhost;dbname=bible_tracker_account", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Query the user_progress table to fetch user progress
    $sql = "SELECT chapter_id, completed FROM user_progress WHERE user_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$user_id]);

    // Initialize an empty array to store user progress
    $userProgress = [];

    // Fetch all the user's progress data and format it correctly
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $userProgress[$row['chapter_id']] = (int)$row['completed']; // Ensure "completed" is cast to an integer (0 or 1)
    }

    // Set content type and echo JSON
    header('Content-Type: application/json');
    echo json_encode($userProgress);
} catch (PDOException $e) {
    // Handle any database errors
    ob_clean();
    echo json_encode(['error' => 'Database Error: ' . $e->getMessage()]);
}
?>
