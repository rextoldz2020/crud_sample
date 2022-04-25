<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phones";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
  // echo "Connected successfully";

// $sql = "CREATE TABLE products (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, brandname VARCHAR(20) NOT NULL, price DOUBLE(40,2))";
// $sql = "CREATE TABLE user (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, username VARCHAR(50) NOT NULL, password VARCHAR(255) NOT NULL)";

// if ($conn->query($sql) === TRUE) {
  
// } else {
  
// }

// $conn->close();
?>

