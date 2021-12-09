<?php

function getQuestions($file = "questions.json")
{
    $filename = $file;
    $f = fopen($filename, 'r');

    $contents = fread($f, filesize($filename));
    fclose($f);
    return json_decode($contents);
}

function writeQuestions($data, $file = "questions.json")
{
    $f = fopen($file, 'w+');
    fwrite($f, json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
    fclose($f);
}

function removeQuestion($id)
{
    $resultArray = [];
    foreach (getQuestions() as $question) {
        if ($question->id != $id) {
            $resultArray[] = $question;
        }
    }
    writeQuestions($resultArray);
}

function getQuestion($id)
{
    foreach (getQuestions() as $question) {
        if ($question->id == $id) {
            return $question;
        }
    }
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