<?php 
include "connect.php";
$id = $_GET['id'];
$delete = "DELETE FROM users WHERE id = $id";

if ($conn->query($delete))
    echo "Record deleted successfully";
 else 
    echo "Error updating record: " . $conn->error;



?>
