<?php
$host = 'localhost';
$db = 'ibphomework';
$user = 'root'; 
$pass = '123456'; 

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



?>
