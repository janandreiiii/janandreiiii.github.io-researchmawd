<?php
// Database configuration
$dbHost = 'localhost'; // Change this to your MySQL host
$dbUsername = 'username'; // Change this to your MySQL username
$dbPassword = 'password'; // Change this to your MySQL password
$dbName = 'database_name'; // Change this to your MySQL database name

// Attempt to connect to MySQL database
try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUsername, $dbPassword);

    // Set PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Set default fetch mode to associative array
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    // Display error message if connection fails
    die("ERROR: Could not connect. " . $e->getMessage());
}
?>
