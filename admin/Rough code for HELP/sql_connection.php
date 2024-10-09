<?php

$servername = "localhost";
$username = "root";
$passwort = "";

$conn = new mysqli ($servername, $username, $passwort);

if ($conn->connect_error) {
	die("Connection Failed" . $conn->connect_error);
}
echo "Connected Successfully";

?>