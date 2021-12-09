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
    <div class="col-md-8">
        <ul class="list-group">
            <?php
            foreach (getQuestions() as $question) {
                echo "<div class='list-group-item list-group-item-action' aria-current='true' id='{$question->id}'>
                    <div class='d-flex w-100 justify-content-between'>
                      <h5 class='mb-1'>{$question->question}</h5>
                      <small class='text-black-50'>3 days ago</small>
                    </div>
                    <button class='btn btn-outline-primary delete' id='{$question->id}'>Удалить</button>
                    <button class='btn btn-outline-secondary edit'>Редактировать</button>
                  </div>";
            }
            ?>
        </ul>
    </div>
    <div class="col-md-4 d-none" id="form_column">
        <form id="q_edit">
            <div class="form-outline">
                <input type="text" id="question-edit-field" class="form-control"/>
                <label class="form-label" for="question-edit-field">Текст вопроса</label>
            </div>
            <button type="submit" class="btn btn-outline-success">Сохранить</button>
        </form>
    </div>
</div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.js"></script>
<script>
    function postRemoval(HTMLButton) {
        var listElement = $(HTMLButton).parent('.list-group-item');
        $(listElement).animate({
            opacity: 0,
            left: "+=20%"
        }, 2000, function () {
            listElement.remove();
        });
    }

    $('.edit').click(function () {
        var editingQuestionID = $(this).parent('.list-group-item').attr('id');
        $('#form_column').toggleClass('d-none d-block');
        $('#q_edit').submit(function () {
            var newQuestionText = $('#question-edit-field').val();
            console.log("вопрос с ID " + editingQuestionID + newQuestionText);
            $.post('editQuestion.php', {
                id: editingQuestionID,
                text: newQuestionText
            }, function (data) {
                console.log(data);
            })
            return false;
        });

        $('#q_edit button').click(function () {

        });
    });
    $('.delete').click(function () {
        var clickedButton = $(this);
        var clickedButtonId = clickedButton.attr('id');
        console.log("remove button clicked");
        $.get("removeQuestion.php", {
            id: clickedButtonId
        }, function (data) {
            console.log("Server responded");
            postRemoval(clickedButton);
        });
    })
</script>
</html>