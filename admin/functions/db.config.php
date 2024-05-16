<?php

//Local Connection
$host = 'localhost';
$db = 'bar_cms';
$username = 'root';
$password = '';

//Cloud Connection
// $host = 'localhost';
// $db = 'bar_cms';
// $username = 'root';
// $password = 'tAuZH@DWcvK]#:/S>Th.J!';



try {
    $mysqli = new PDO("mysql:host=$host;dbname=$db", $username, $password);

    $mysqli->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // echo "Connected successfully";
} catch (PDOException $e) {
    echo $e->getMessage();
}
