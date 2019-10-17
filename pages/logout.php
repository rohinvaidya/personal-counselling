<?php
// remove all session variables

//unset($_SESSION['id']);
session_start();
$_SESSION = array();
session_destroy();

header('Location:../index.php');
