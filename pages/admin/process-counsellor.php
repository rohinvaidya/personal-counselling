<?php
include('../../includes/db.php');

if (isset($_POST['submit'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $to = $email;
    $subject="You have been registered as a councellor!";

    $message = "Your loging credentials is  : ".$password." <br>";

    $header = "From:noreply@convocare.com\r\n";
    $header .= "MIME-version: 1.0\r\n";
    $header .= "Content-Type: text/html\r\n";
    //echo $message;

    if(!mail($to, $subject, $message, $header)){
        die( "failed");
    }


    $query = "INSERT INTO USER(EMAIL,PASSWORD,ROLE)
        VALUES('".$_POST['email']."','".$_POST['password']."','counsellor')";
    
    // Firing a query
    $result = mysqli_query($dbc,$query)
        or die('sql error'.mysqli_error($dbc));

        header('Location:admin.php');

    
}
else{
    echo "Error in recieving data!";
}
?>