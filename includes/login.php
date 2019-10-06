<?php

include_once("db.php");

echo $_SESSION['count'];

// $email = $_POST['email'];
// $password = $_POST['password'];

$login = "select * from user 
    where email = 'admin@gmail.com'
    and password  = 'admin123'";


$result = mysqli_query($dbc,$login)
    or die('sql error'.mysqli_error($dbc));
$res = mysqli_fetch_array($result,MYSQLI_NUM)
    or die('sql error'.mysqli_error($dbc));

// foreach($res as $key){
//     echo "<br>".$key; 
// }
$_SESSION['role'] = $res[1];
$_SESSION['fname'] = $res[3];
$_SESSION['lname'] = $res[4];
$_SESSION['email'] = $res[5];
$_GLOBAL['logged'] = true;
?>