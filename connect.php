<?php
$host = "localhost"; // Change this to your database host
$dbname = "db_tru"; // Change this to your database name
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

    // Enable error reporting
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connection Successfully";

    // Additional options (optional)
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
