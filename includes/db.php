<?php

// Connection
$dbHost = 'localhost';
$dbUser = 'root';
$dbPassword = '';
$dbName = 'counselling';

$dbc = mysqli_connect($dbHost ,$dbUser ,$dbPassword ,$dbName)
    or die('error in connection');
?>