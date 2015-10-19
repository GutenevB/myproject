<head>
    <meta charset="utf-8">
</head>
<body>
<input type="text" name="text">
<input type="submit" value="Отправить">
</body>
<?php
/**
10. Сделайте класс-валидатор $_REQUEST, $_GET, $_POST. Класс должен иметь
private методы обрезание пробелов del_gaps и удаление тегов del_tags (оболочку
над стандартными) и public метод protect, который получает массив, обрабатывает
его del_gaps и del_tags и возвращает обработанный массив. Класс должен иметь
public свойства request, post, get, в которых хранятся соответствующие
обработанные массивы. Обработка должна происходить при инициализации
класса (то есть в __construct).
 */
class Value
{
    public $request;
    public $get;
    public $post;

    private function __construct()
    {

    }
    private function Gaps()
    {

    }
    private function Tags()
    {

    }
    public function protect()
    {

    }
}