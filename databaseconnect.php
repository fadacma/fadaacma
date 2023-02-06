<?php
$servername = "localhost";
$username = "fadacma";
$password = "@ngelous61416141fada08";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>