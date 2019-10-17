<?php
/**
 * Created by PhpStorm.
 * User: shubham
 * Date: 09-10-2019
 * Time: 23:32
 */
include ("../../includes/db.php");
session_start();
if (isset($_SESSION['id']))
{
    $user_id = $_SESSION['id'];

}
else
{
    header('Location:../error.php');
}

if (isset($_POST['submit'])){
    $count = $_POST['i_value'];
    $score = 0;
    $test_id = $_POST['test_id'];
    for ($i=1;$i<$count+1;$i++){
        $question_id_s='question_id_'.$i;
        $option='options_'.$i;
        $correct_answer = 'correct_answer_'.$i;

        $question_id = $_POST[$question_id_s] ;
        $answer = $_POST[$option];
        $actual_answer = $_POST[$correct_answer];
        if ($answer == $actual_answer)
            $score++;

//        die($answer);
//        echo $question_id;
//
//        echo "<br>";
//
//        echo $answer;
//        echo "<br>";
//
//        echo $actual_answer;
//        echo "<br>";

        $query1="INSERT into user_question_answer(user_id, test_id,question_id,user_answer) values ($user_id, $test_id,$question_id,'$answer')";
        //die($query1);

        $result=mysqli_query($dbc,$query1);

        if(!$result)
            die("there was some error in database while inserting 1".mysqli_error($dbc));
    }
    //echo "Score = ".$score;
    $query2="INSERT into user_test(user_id, test_id,score) values ($user_id, $test_id,$score)";
    $result=mysqli_query($dbc,$query2);

    if(!$result)
        die("there was some error in database while inserting 2".mysqli_error($dbc));
    else
        header("Location: score.php?score=$score");

}