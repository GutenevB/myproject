<?php
/**
16. Сделайте класс, который создает формы. Класс должен иметь следующие
методы: создание и возвращение инпута, создание и возвращение textarea,
создание и возвращение селекта, создание и возвращение чекбокса (вместе со
скрытым), создание и возвращение radio. p.s. создание и возвращение - в одном
методе.
 */
class NewForm
{

    public function InputHtml()
    {
        $input = '<input type="text" name="text" value="text">';
        echo $input;
        echo "<br />";
    }
    public function TextareaHtml()
    {
        $textarea = '<textarea rows="10" cols="45" name="textarea"></textarea>';
        echo $textarea;
        echo "<br />";
    }
    public function SelectHtml()
    {
        $select= ' <p><select size="3" multiple name="h">
    <option disabled>Ну как?</option>
    <option >Круто</option>
    <option >Очень круто</option>
    <option >Это вообще круто</option>
    </select></p>';
        echo $select;
        echo "<br />";
    }
    public function ChecHtml()
    {
        $chec='
   <p><input type="checkbox" name="option1" checked>HTML<Br>
   <input type="checkbox" name="option2" >PHP<Br>
   <input type="checkbox" name="option3" >SQL<Br>
   <input type="checkbox" name="option4" >OOP<Br>
   <input type="checkbox" name="option5" >XML</p>';
    echo $chec;
        echo "<br />";
    }
    public function RadioHtml()
    {
        $radio= '<b>Для усвоения:</b><Br>
   <input type="radio" name="browser" value="goof"> Отлично<Br>
   <input type="radio" name="browser" value="verygood"> Очень круто<Br>
   <input type="radio" name="browser" value="vevegood"> Это гениально<Br>
   </p>';
        echo $radio;
    }

}
$new = new NewForm();

?>

<html>
<head>
    <meta charset='utf-8'>
</head>
<body>
<form method='post'>
<?php
    $new->InputHtml();
    $new->TextareaHtml();
    $new->SelectHtml();
    $new->ChecHtml();
    $new->RadioHtml();
?>
</form>
</body>
</html>
