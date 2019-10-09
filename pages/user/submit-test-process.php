<?php
/**
 * Created by PhpStorm.
 * User: shubham
 * Date: 09-10-2019
 * Time: 23:32
 */

if (isset($_POST['submit'])){
    $count = $_POST['i_value'];
    $score = 0;

    for ($i=1;$i<$count+1;$i++){
        $question_id_s='question_id_'.$i;
        $option='options_'.$i;
        $correct_answer = 'correct_answer_'.$i;

        $question_id = $_POST[$question_id_s] ;
        $answer = $_POST[$option];
        $actual_answer = $_POST[$correct_answer];
        if ($answer == $actual_answer)
            $score++;
        echo $question_id;

        echo "<br>";

        echo $answer;
        echo "<br>";

        echo $actual_answer;
        echo "<br>";
    }
    echo "Score = ".$score;
}