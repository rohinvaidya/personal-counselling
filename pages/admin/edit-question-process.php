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

    $question_id = $_GET['question_id'];
    $question=$_POST['question'];
    $option1=$_POST['option1'];
    $option2=$_POST['option2'];
    $option3=$_POST['option3'];
    $option4=$_POST['option4'];
    $correct_answer=$_POST['correct_answer'];
    $test_id = $_POST['test_id'];


    $query="UPDATE question_choice SET question = '$question', option1='$option1', option2='$option2',option3='$option3',option4='$option4', correct_answer='$correct_answer' WHERE question_id=$question_id ";

    $result=mysqli_query($dbc,$query);
    if($result)
    {
        header('Location: manage-question.php?test_id='.$test_id);
    }
    else {
        die("Did not upload".mysqli_error($dbc));
    }
}
?>