<?php
$host = 'localhost'; // Change if your database is on a different host
$dbname = 'bible_tracker_account'; // Replace with your database name
$username = 'root'; // Replace with your database username
$password = ''; // Replace with your database password
$port = '3307'; // Change to the new MySQL port you have configured

// Create a PDO instance
$pdo = new PDO("mysql:host=$host;dbname=$dbname;port=$port", $username, $password);

// Set PDO error mode to exception
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Set default fetch mode to array
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

// Set character set to utf8mb4
$pdo->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES utf8mb4");


?>
