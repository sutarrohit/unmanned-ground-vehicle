<?php 
$conn = new mysqli('localhost', 'pi', 'function1010', 'ugv');
if ($conn->connect_error) {
	die("Connection error: " . $conn->connect_error);
}
?>

