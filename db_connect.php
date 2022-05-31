<?php
$conn= new mysqli('localhost','root','','bus_booking')or die("Could not connect to mysql".mysqli_error($conn));
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
