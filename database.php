<?php
$servername = "172.16.238.12";
$username = "root";
$password = "";
$dbname = 'phpdb';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
