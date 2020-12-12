<?php
$servername = "200.18.128.52";
$username = "pedro_allan_samu";
$password = "pedro_allan_samu";
$nomeBD = "bibliotech";

// Create connection
$conn = new mysqli($servername, $username, $password, $nomeBD);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>