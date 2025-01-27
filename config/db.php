<?php
$servername = "localhost:3307";
$username = "root"; 
$password = "password";     
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully \n";
} else {
    echo "Error creating database: \n" . $conn->error;
}

$conn->select_db($dbname);

$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    lastName VARCHAR(50)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully \n";
} else {
    echo "Error creating table: \n" . $conn->error;
}
?>
