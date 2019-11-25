<?php

$server = 'localhost';
$user = 'root';
$pwd = '';
$db = 'water-billing';


$conn = new mysqli($server, $user, $pwd, $db);
if ($conn->connect_error) {
    echo "Failed:" . $conn->connect_error;
}


?>