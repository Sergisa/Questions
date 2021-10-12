<?php
include 'functions.php';
if(checkQuestion($_GET['id'], $_POST['answer'])){
    echo "Вы правильно ответили на вопрос";
}else{
    echo "Вы не правильно ответили на вопрос";
}