<html>
<head>

</head>
<body>


<div>

<center>
 <?php 
$conn = new mysqli('localhost', 'Username', 'Password', 'databasename');
if ($conn->connect_error) {
        die("Connection error: " . $conn->connect_error);
}
$result = $conn->query("SELECT * FROM sensor");
if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
                echo $row['distance'] ."    CM";
        }
}


?>
</center>
</div>
</body>
</html>
