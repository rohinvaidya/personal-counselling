<?php
/**
 * Created by PhpStorm.
 * User: shubham
 * Date: 07-10-2019
 * Time: 21:33
 */



include('../../includes/db.php');

if (isset($_POST['submit'])){

    $query = "INSERT INTO test(test_name,is_active)
        VALUES('".$_POST['name']."','counsellor')";


    if (mysqli_query($dbc, $query)) {
        //echo "New record created successfully";
        header("Location: add-test.php");
    } else
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

