<?php
/**
 * Created by PhpStorm.
 * User: shubham
 * Date: 08-10-2019
 * Time: 12:40
 */

include('../../includes/db.php');

if(isset($_POST['submit']))
{

    $test_id = $_GET['test_id'];
    $question=$_POST['question'];
    $option1=$_POST['option1'];
    $option2=$_POST['option2'];
    $option3=$_POST['option3'];
    $option4=$_POST['option4'];
    $correct_answer=$_POST['correct_answer'];

    $query="INSERT into question_choice(test_id,question,option1,option2,option3,option4,correct_answer) values ($test_id,'$question','$option1','$option2','$option3','$option4','$correct_answer')";
    //die($query);

    $result=mysqli_query($dbc,$query);
    if($result)
    {
        header('Location: add-question.php?test_id='.$test_id);
    }
    else {
        die("Did not upload".mysqli_error($dbc));
    }
}
