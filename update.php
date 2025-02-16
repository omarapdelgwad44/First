<?php 
include "connect.php";
$username = $_POST['username'];
$email = $_POST['email'];
$id = $_POST['id'];
$update = "UPDATE users SET username='$username', email='$email' WHERE id=$id";

if ($conn->query($update))
    echo "Record updated successfully";
 else 
    echo "Error updating record: " . $conn->error;



?>