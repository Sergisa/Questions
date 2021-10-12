<?php

function getQuestions($file = "questions.json")
{
    $filename = $file;
    $f = fopen($filename, 'r');

    $contents = fread($f, filesize($filename));
    fclose($f);
    return json_decode($contents);
}
function getQuestion($id)
{
    $actualQuestion = null;
    foreach (getQuestions() as $question) {
        if ($question->id == $id) {
            $actualQuestion = $question;
        }
    }
    return $actualQuestion;
}

function getQuestionText($id)
{
    return getQuestion($id)->question;
}

function checkQuestion($id, $answer){
    /*if(getQuestion($id)->answer == $answer){
        return true;
    }else{
        return false;
    }*/

    /*if(getQuestion($id)->answer == $answer){
        return true;
    }
    return false;*/

    return getQuestion($id)->answer == $answer;
}