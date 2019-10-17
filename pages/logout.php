<?php
// remove all session variables
session_unset($_SESSION['id']);
session_unset($_SESSION['role']);

// destroy the session
session_destroy();

header('Location:../index.php');
?>