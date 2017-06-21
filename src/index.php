<?php
$servername = "192.168.50.100:3306";
$username = "root";
$password = "wordpress";
$dbname = "wordpress";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "select welcome_message from relayr";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo "welcome_message_from_mysql_database=" .$row["welcome_message"];
    }
} else {
    echo "0 results";
}
$conn->close();
?>

