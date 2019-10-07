<?php
include('../includes/db.php');

// This is a file I found for uploading a file
// include('../includes/upload.php');

if (isset($_POST['submit'])){

    //************************* THIS IS THE MAIN QUERY************************
    // $query = "UPDATE TABLE USER
    //     SET PROFILEPICPATH = ".$_POST['profilepicpath'].",
    //     FIRST_NAME = ".$_POST['first_name'].",
    //     LAST_NAME = ".$_POST['last_name'].",
    //     PASSWORD = ".$_POST['password'].",
    //     CONTACT_NO = ".$_POST['contact_no'].",
    //     IS_REGISTERED = 1
    //     WHERE EMAIL = '". $_SESSION['email']."'";

    // ************************************************************************

    // ********************Only for testing run this query*********************
    // echo $_POST['profilepicpath']."<br>";
    // $path = $_POST['profilepicpath']."<br>";
    // echo $_POST['first_name']."<br>";
    // echo $_POST['last_name']."<br>";
    // echo $_POST['email']."<br>";
    // echo $_POST['password']."<br>";
    // echo $_POST['contact_no']."<br>";

    // $query = "UPDATE USER
    // SET FIRST_NAME = '".$_POST['first_name']."',
    // LAST_NAME = '".$_POST['last_name']."',
    // PASSWORD = '".$_POST['password']."',
    // CONTACT_NO = '".$_POST['contact_no']."',
    // IS_REGISTERED = 1
    // WHERE EMAIL = 'abc@gmail.com'";

    // echo $query."<br>";

    // *****************************Firing a query******************************
    // $result = mysqli_query($dbc,$query)
    //     or die('sql error'.mysqli_error($dbc));
}
else{
    echo "Error in recieving data!";
}
?>