<?php
session_start();

if(isset($_SESSION['counter']) && $_SESSION['counter'] <= 15){
    $_SESSION['counter']= $_SESSION['counter'] +  1;
    // $msg = "<br/>Welcome ".$_SESSION['fname']." !";
    // echo $msg;
    $count = "<br>You have visited this page ".$_SESSION['counter']." number of times!";
    $_SESSION['count']= $count;
}
else if ($_SESSION['counter'] >= 15){
    echo "Session timeout";
    unset($_SESSION['counter']);
}
else {
    $_SESSION['counter'] = 1;
}
?>