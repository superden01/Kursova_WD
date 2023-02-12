<?php
$servername = "localhost";
$database = "automag";
$username = "root";
$password = "123456789";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>