<?php
// db.php
$servername = "localhost";
$username = "root";
$password = "Alli2554";
$dbname = "solution-hub";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
