<?php
// Database connection
$servername = "localhost";  // Change as needed
$username = "root";
$password = "";
$dbname = "db_aiit";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>