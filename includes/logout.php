<?php

include_once('db.php');

if ($_SESSION['logged']){
    $_SESSION['logged'] = false;
    mysqli_close($dbc);
    session_destroy();
}
else{
    echo "You are not logged in!";
}
?>