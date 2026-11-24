<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ujiann_deri";

// Create connection
$conn = mysqli_connect("localhost", "root", "", "ujiann_deri" );

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>