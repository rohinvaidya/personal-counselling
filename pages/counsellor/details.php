<?php

session_start();

include('../../includes/db.php');

if (isset($_POST['submit'])){

    $profile = $_FILES['profilepicpath']['name'];
    $profile_temp  =  $_FILES['profilepicpath']['tmp_name'];
    $profileinfo = getimagesize($_FILES["profilepicpath"]["tmp_name"]);
    $width = $profileinfo[0];
    $height = $profileinfo[1];

    if ($width > "900" or $height > "900") {
        echo "Image dimension should be within 900X900";
    }
    else if(move_uploaded_file($profile_temp,"../../storage/images/$profile"))
    {
        echo "File uploaded Successfully";
        
        // THIS IS THE MAIN QUERY
        $query = "UPDATE USER
        SET PROFILEPICPATH = '".$profile."',
        FIRST_NAME = '".$_POST['first_name']."',
        LAST_NAME = '".$_POST['last_name']."',
        PASSWORD = '".$_POST['password']."',
        CONTACT_NO = '".$_POST['contact_no']."',
        IS_REGISTERED = 1
        WHERE EMAIL = '". $_SESSION['email']."'";

        // Firing a query
        $result = mysqli_query($dbc,$query)
            or die('sql error'.mysqli_error($dbc));

        $_SESSION['name'] = $_POST['first_name']." ".$_POST['last_name'];
        $_SESSION['profilepic'] = "../../storage/images/".$profile;

        header('Location:counsellor.php');
    }
    else
    {
        echo "Sorry, file not uploaded, please try again!";
    }
}
else{
    echo "Error in recieving data!";
}
?>