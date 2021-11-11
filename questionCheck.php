<?php
include 'functions.php';
if(checkQuestion($_GET['id'], $_POST['answer'])){
    header("Location: index.php?q=" . $_GET['id']+1);
}else{
    header("Location: fail.php");
}