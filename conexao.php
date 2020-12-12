<?php
$servername = "localhost";
$username = "pedro_allan_samu";
$password = "pedro_allan_samu";
$nomeBD = "pedro_allan_samu";

// Create connection
$conn = new mysqli($servername, $username, $password, $nomeBD);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>