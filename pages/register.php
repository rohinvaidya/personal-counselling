<?php
if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $first_name=$_POST['name'];
    echo $email;
    echo $first_name;
    echo $password;
    $connection = mysqli_connect('localhost', 'root', '','prsnlcnl');
    if($connection)
    {
        echo "database online"."<br>";
    }
    else 
    {
        die("database not online");
    }

    $query_buyer= "INSERT INTO user(email,password,first_name) VALUES('$email','$password','$first_name')";
    $result = mysqli_query($connection,$query_buyer);

    if ($result) 
    {
        echo "Successfully inserted into database" . "<br>";
    } 
    else 
    {
        die("Unsuccessful" . mysqli_error($connection));
    }
    header('Location:login.php');
 
 
}
?>