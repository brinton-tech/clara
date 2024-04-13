<?php
// Database configuration
$serverName = 'localhost'; 
$userName= 'root'; 
$password = 'Kahurani'; 
$dbName = 'rental_management'; 

// Establish database connection using MySQLi
$conn = new MySQLi($serverName, $userName, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    die ("Connection failed!" .'$conn->connect_error');

    } else {

    echo "";
} 



?>