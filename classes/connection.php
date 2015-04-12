<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restoran";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Spajanje na bazu neuspješno: " . $conn->connect_error);
} 

?>

