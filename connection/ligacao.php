<?php
$servername = "localhost";
$username = "pqooapet_site";
$password = "TP63wZIjU";
$dbname = "pqooapet_site";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>