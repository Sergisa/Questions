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
    //$actualQuestion = null;
    foreach (getQuestions() as $question) {
        if ($question->id == $id) {
            return $question;
        }
    }
    //return $actualQuestion;
}

function getQuestionText($id)
{
    return getQuestion($id)->question;
}

function checkQuestion($id, $answer)
{
    return is_array(getQuestion($id)->answer)
        ? in_array($answer, getQuestion($id)->answer)
        : getQuestion($id)->answer == $answer;
    /*if (is_array(getQuestion($id)->answer)) {
        return in_array($answer, getQuestion($id)->answer);
    }
    return getQuestion($id)->answer == $answer;*/
}