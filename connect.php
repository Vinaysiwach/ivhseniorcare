<?php
$host = "localhost"; 
$dbname="ivhsenior";
$user = "root";
$password = "ivh!@#care";
$conn = mysqli_connect($host,$user,$password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>