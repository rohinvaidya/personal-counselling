<?php
if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $first_name=$_POST['fname'];
    $last_name=$_POST['lname'];
    $stream = $_POST['stream'];
    $str = implode(", ",$stream);
    $contact=$_POST['number'];
    $post_image  =  $_FILES['post_image']['name'];
    $post_image_temp  =  $_FILES['post_image']['tmp_name'];
    move_uploaded_file($post_image_temp,"../../storage/images/$post_image");
    include("../includes/db.php");
    if($dbc)
    {
        echo "database online"."<br>";
    }
    else 
    {
        die("database not online");
    }

    $query_buyer= "INSERT INTO user(first_name,last_name,email,password,contact_no,preferences,profilepicpath,role,is_registered) VALUES('$first_name','$last_name','$email','$password','$contact','$str','$post_image','client',1)";
    $result = mysqli_query($dbc,$query_buyer);

    if ($result) 
    {
        echo "Successfully inserted into database" . "<br>";
    } 
    else 
    {
        die("Unsuccessful" . mysqli_error($dbc));
    }
    header('Location:login.php');
 
 
}
?>