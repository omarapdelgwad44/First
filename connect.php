<?php
// Create connection(mysql i object oriented)
/*
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "first";
*/
/*
define('localhost', 'localhost');
define('username', 'root');
define('password', '');
define('dbname', 'first');


$conn = new mysqli(localhost, username, password, dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
*/




// Create connection(mysql i procedural)
define('localhost', 'localhost');
define('username', 'root');
define('password', '');
define('dbname', 'first');
$conn = mysqli_connect(localhost, username, password, dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";





























?>