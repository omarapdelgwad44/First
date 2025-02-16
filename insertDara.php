<?php
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
include 'connect.php';
if(isset($_POST['Register'])){
    $sql = "
    INSERT INTO users (username, email, password) 
    VALUES ('$username', '$email', '$password')
    ";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}







?>