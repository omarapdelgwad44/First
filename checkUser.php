<?php
include 'connect.php';
if(isset($_POST['Login'])){
$username = $_POST['username'];
$password = $_POST['password']; 
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
   session_start();
   $_SESSION['username']= $username;
   header("Location: home.php");
} else 
    echo "error";

}





?>