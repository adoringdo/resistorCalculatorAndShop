<?php
$host = 'localhost';  // the host you want to connect to
$dbname = 'resistor_calculator';  // the database name
$user = 'root';  // your MySQL username
$pass = '';  // your MySQL password

// Create a PDO instance
try {
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
