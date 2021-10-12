**questions.json** содержит набор вопросов JSON формате  
**index.php** показывает вопрос  
**functions.php** содержит механику (дать вопрос, проверить ответ, забрать все вопросы)
**questionCheck.php** проверяет данный ответ
**scss/style.scss** содержит файлы из которых сгенерируется CSS  
**style/style.css** содержит сгенерированные стили  

Запуск формирования CSS файлов 
=
Необходимые программы
-
для работы с SCSS файлами на компьютере должен быть установлен SCSS компилятор и испонитель языка ruby  
подробнее: https://rubygems.org/gems/scss

Запускаемые команды
-
для того что бы сгенерировать `.min.css` файлы нужно в командной строке набрать  
` scss scss/style.scss style/style.min.css -t compressed --sourcemap=none`  
для того что бы сгенерировать `.css` файлы нужно в командной строке набрать  
` scss scss/style.scss style/style.css -t expanded --sourcemap=none`

