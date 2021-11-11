<?php
include 'functions.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="style/style.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="row mt-2">
    <div class="col-md-8 mx-auto">
        <ul class="list-group">
            <?php
            foreach (getQuestions() as $question){
                echo "<a href='#' class='list-group-item list-group-item-action' aria-current='true'>
                    <div class='d-flex w-100 justify-content-between'>
                      <h5 class='mb-1'>{$question->question}</h5>
                      <small class='text-black-50'>3 days ago</small>
                    </div>
                    <p class='mb-1'>Some placeholder content in a paragraph.</p>
                    <span class='badge rounded-pill bg-primary'>Primary</span>
                  </a>";
            }
            ?>
        </ul>
    </div>
</div>

</body>
</html>