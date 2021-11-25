<?php
include 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style/style.min.css" rel="stylesheet">
    <title>Вопросник</title>
</head>
<body>

<form method="post" action="questionCheck.php?id=<?=$_GET['q']?>">
    <div class="row">
        <div class="col-md-12">
            <div class="card question-card mx-auto">
                <div class="card-body">
                    <h5 class="card-title">Вопрос</h5>
                    <p class="card-text">
                        <?php

                        if (array_key_exists('q', $_GET)) {
                            echo getQuestionText($_GET['q']);
                        }
                        ?>
                        <input type="text" name="answer">
                        <input type="hidden" >
                    </p>
                    <input type="submit" value="Ответить" class="float-end btn btn-primary"/>
                </div>
            </div>
        </div>
    </div>

</form>
</body>

</html>