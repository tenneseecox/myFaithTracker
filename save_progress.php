<?php
session_start();

// Ensure the user is authenticated (you should have user sessions)
if (!isset($_SESSION['user_id'])) {
    header('Content-Type: application/json');
    echo json_encode(['error' => 'Unauthorized']);
    exit;
}

// Include your database connection code here
require_once('db.php');

// Get the user's ID from the session
$user_id = $_SESSION['user_id'];

// Get the raw JSON data from the request body
$jsonData = file_get_contents('php://input');
$requestData = json_decode($jsonData, true); // Decode the JSON into an associative array

// Ensure the requestData is an array and contains chapter_id, completed, and book fields
if (is_array($requestData) && isset($requestData['chapter_id']) && isset($requestData['completed']) && isset($requestData['book'])) {
    try {
        // Connect to the database
        $pdo = new PDO("mysql:host=localhost;dbname=bible_tracker_account", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Extract chapter_id, completed, and book from requestData
        $chapter_id = $requestData['chapter_id'];
        $completed = ($requestData['completed'] == 1) ? 1 : 0;
        $book = $requestData['book'];

        // Check if the user has already completed this chapter
        $sql = "SELECT * FROM user_progress WHERE user_id = ? AND chapter_id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$user_id, $chapter_id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // If the user has already completed this chapter, update the completed status
        if ($row) {
            $sql = "UPDATE user_progress SET completed = ? WHERE user_id = ? AND chapter_id = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$completed, $user_id, $chapter_id]);
        } else {
            // If the user has not completed this chapter, insert a new row
            $sql = "INSERT INTO user_progress (user_id, chapter_id, completed, book) VALUES (?, ?, ?, ?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$user_id, $chapter_id, $completed, $book]);
        }

        // Retrieve the updated userProgress and send it back in the response
        $sql = "SELECT * FROM user_progress WHERE user_id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$user_id]);
        $userProgress = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $userProgress[$row['chapter_id']] = (bool) $row['completed'];
        }

        // Set content type and echo JSON response
        header('Content-Type: application/json');
        echo json_encode(['success' => true, 'userProgress' => $userProgress]);

    } catch (PDOException $e) {
        // Handle any database errors
        header('Content-Type: application/json');
        echo json_encode(['error' => 'Database Error: ' . $e->getMessage()]);
    }
} else {
    // Handle missing or invalid POST data
    header('Content-Type: application/json');
    echo json_encode(['error' => 'Invalid requestData']);
}
?>
