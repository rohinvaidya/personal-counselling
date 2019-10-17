<?php
/**
 * Created by PhpStorm.
 * User: shubham
 * Date: 18-10-2019
 * Time: 00:25
 */

include("../../includes/db.php");

$user_id = $_GET['user_id'];
$test_id = $_GET['test_id'];

$query = "select * from user_test where user_id=$user_id and test_id = $test_id";
$result=mysqli_query($dbc,$query);

if (mysqli_num_rows($result)==0)
    header("Location: give-test.php?test_id=$test_id");
else
    header("Location: given-test.php");



