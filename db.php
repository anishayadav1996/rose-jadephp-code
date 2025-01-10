<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rose-jade";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
// if($conn){
//     echo "Connection done";
// }
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
