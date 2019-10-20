<?php

session_start();

include('../../includes/db.php');

if (isset($_POST['submit'])){

    $profile = $_FILES['profilepicpath']['name'];
    $profile_temp  =  $_FILES['post_image']['tmp_name'];

    // THIS IS THE MAIN QUERY
    $query = "UPDATE USER
        SET PROFILEPICPATH = '".$_FILES['profilepicpath']['name']."',
        FIRST_NAME = '".$_POST['first_name']."',
        LAST_NAME = '".$_POST['last_name']."',
        PASSWORD = '".$_POST['password']."',
        CONTACT_NO = '".$_POST['contact_no']."',
        IS_REGISTERED = 1
        WHERE EMAIL = '". $_SESSION['email']."'";

    // Firing a query
    $result = mysqli_query($dbc,$query)
        or die('sql error'.mysqli_error($dbc));

    move_uploaded_file($profile_temp,"../../public/storage/images/$profile");

    header('Location:counsellor.php');
}
else{
    echo "Error in recieving data!";
}
?>