<?php
/**
 * Created by PhpStorm.
 * User: shubham
 * Date: 07-10-2019
 * Time: 21:33
 */



include('../../includes/db.php');

if (isset($_POST['submit'])){

    $name=$_POST['name'];
    $query = "INSERT INTO test(test_name,is_active)VALUES('$name',0)";


    if (mysqli_query($dbc, $query)) {
        //echo "New record created successfully";
        header("Location: add-test.php");
    } else
        echo "Error: " . $query . "<br>" . mysqli_error($dbc);
}

