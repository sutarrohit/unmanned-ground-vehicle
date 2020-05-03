<?php
$servername = "localhost";
$username = "pi";
$password = "function1010";
$dbname = "ugv";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM sensor";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  $row["distance"];
    }
} else {
    echo "$results";
}
$conn->close();
?>

