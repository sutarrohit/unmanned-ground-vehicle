<?php 
$conn = new mysqli('localhost', 'username', 'password', 'databasename');
if ($conn->connect_error) {
	die("Connection error: " . $conn->connect_error);
}
?>

