<?php

$servername = "localhost";
$username = "root";
$password = "";
$database_name = "todo";

$conn = new mysqli($servername, $username, $password, $database_name);

if ($conn->connect_error) {
    die("Failed to connect" . $conn->connect_error);
} else {
    echo "Connected to Database";
}
