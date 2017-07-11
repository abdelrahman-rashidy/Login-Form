<?php
$servername = "localhost";
$usernamee = "root";
$password = "admin";
$dbname = "tr";

// Create connection
$conn = new mysqli($servername, $usernamee, $password, $dbname);
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