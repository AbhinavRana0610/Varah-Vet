<?php
$host = "localhost";
$user = "root";
$password = ""; // empty if using XAMPP
$db = "kold";

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
