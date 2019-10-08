<?php

// Connection
$dbHost = 'localhost';
$dbUser = 'root';
$dbPassword = '';
$dbName = 'project';

$dbc = mysqli_connect($dbHost ,$dbUser ,$dbPassword ,$dbName)
    or die('error in connection');
?>