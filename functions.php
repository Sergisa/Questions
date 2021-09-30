<?php
function getQuestions()
{
    $filename = 'questions.json';
    $f = fopen($filename, 'r');

    $contents = fread($f, filesize($filename));
    fclose($f);
    return json_decode($contents, true);
}

function getQuestion($id)
{
    return getQuestions()[$id]['question'];
}