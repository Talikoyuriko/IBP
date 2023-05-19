<?php
require 'connect.php'; 

if (isset($_POST['fullname'], $_POST['email'], $_POST['gender'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    
    $sql = "INSERT INTO students (full_name, email, gender) VALUES ('$fullname', '$email', '$gender')";
    
    if ($conn->query($sql) === TRUE) {
        $message = "Data inserted successfully!";
    } else {
        $error = "Error inserting data: " . $conn->error;
    }
} else {
    $error = "All fields are required!";
}
?>