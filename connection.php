<?php
#estableshing a connection to the database 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "binary-brains";


$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>