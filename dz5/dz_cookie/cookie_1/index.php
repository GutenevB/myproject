<?php
/*
 Сделайте две страницы: index.php и test.php. При заходе на index спросите с
помощью формы страну пользователя, запишите ее в куки с именем country. При
заходе на test.php выведите страну пользователя. Удалите куку с именем country.
 */
?>

<html>
<heat>
    <meta charset="utf-8">
    <title>Ваша страна</title>
</heat>
<body>
<form method="post" action="index.php">
    <input type="text" name="text">Введите страну
    <input type="submit" value="Отправить">

</form>
</body>
</html>
<?php
if(!empty($_POST['text'])&& isset($_POST['text'])){
    $text = $_POST['text'];
    setcookie("country",$text, time()+3600);
    echo "<a href = test.php>Ваши куки</a>";
}else{
    echo "Введите данные";
}
?>