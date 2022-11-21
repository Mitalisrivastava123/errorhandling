<?php
$servername = "mysql-server";
$username = "root";
$password = "secret";
$dbname = "mydata2";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);

}
else
{
  echo "connected successfully";
}
// if the connection is not possible it will show an error connection failed else connected
?>