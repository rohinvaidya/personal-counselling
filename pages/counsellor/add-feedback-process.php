<?php

include('../../includes/db.php');

if(isset($_POST['submit']))
{
    $user_id = $_POST['user_id'];
    $feedback = $_POST['feedback'];

    $query="INSERT INTO feedback(feedback, user_id) VALUES ('$feedback',$user_id)";
//    die($query);

    $result=mysqli_query($dbc,$query);

    if($result)
    {
        header('Location: feedback.php');
    }
    else {
        die("Did not upload".mysqli_error($dbc));
    }
}

