<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Вопросник</title>
</head>
<body>
<?php
include 'functions.php';
?>
<pre>

<?php
echo json_encode(getQuestions(), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
?>
</pre>
<form method="post" action="questionCheck.php">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Вопрос</h5>
            <p class="card-text">
                <?php
                //            if($_GET['q'] !== null){}
                //            if(isset( $_GET['q'] )){}
                //            if(!empty( $_GET['q'] )){}
                if (array_key_exists('q', $_GET)) {
                    echo getQuestion($_GET['q']);
                }
                ?>
                <input type="text" name="answer">

            </p>
            <input type="submit" value="Ответить" class="float-right btn btn-primary"/>
        </div>
    </div>
</form>
</body>
</html>