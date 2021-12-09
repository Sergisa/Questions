<?php
include 'functions.php';
echo "Remove question with id: " . $_GET['id'];
removeQuestion($_GET['id']);