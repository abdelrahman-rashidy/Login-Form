<?php
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "tr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



if(mysqli_connect_errno()){
die('cannot connect to database field'.mysqli_connect_error());
}else{
echo 'database is connect';
}

?>