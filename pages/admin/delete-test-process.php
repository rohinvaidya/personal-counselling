<?php
/**
 * Created by PhpStorm.
 * User: shubham
 * Date: 07-10-2019
 * Time: 21:33
 */

include('../../includes/db.php');

$test_id = $_GET['test_id'];

$query = "DELETE FROM TEST WHERE test_id = $test_id";


if (mysqli_query($dbc, $query)) {
    //echo "New record created successfully";
    header("Location: manage-test.php");
} else
    echo "Error: " . $query . "<br>" . mysqli_error($dbc);

