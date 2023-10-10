<?php
// Get the form data
$username = $_POST['username'];
$password = $_POST['password'];

// Validate and sanitize the data (you may add more validation as per your requirements)

// Connect to the database
$servername = "localhost";
$dbUsername = "signup_db";
$dbPassword = "";
$dbName = "members";

$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute the SQL query to insert the user details
$stmt = $conn->prepare("INSERT INTO members (username, password) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();

$stmt->close();
$conn->close();              

// Redirect to a success page or do whatever you want
header("Location: success.php");
exit();
?>