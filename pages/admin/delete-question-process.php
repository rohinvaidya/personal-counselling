<?php
/**
 * Created by PhpStorm.
 * User: shubham
 * Date: 09-10-2019
 * Time: 18:33
 */

include ("../../includes/db.php");
$question_id = $_GET['question_id'];
$test_id = $_GET['test_id'];
$query = "DELETE FROM question_choice WHERE question_id = $question_id";

if (mysqli_query($dbc, $query)) {
    //echo "New record created successfully";
    header("Location: manage-question.php?test_id=$test_id");
} else
    echo "Error: " . $query . "<br>" . mysqli_error($dbc);