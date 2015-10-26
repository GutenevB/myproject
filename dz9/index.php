<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Запись новостей</title>
</head>
<body>
<b><h1>Введите данные</h1></b>
<form method="post" action="">
    <input type="text" name="title" required placeholder="|Заголовок"> <br/>
    <input type="text" name="url" required placeholder="|Адрес"> <br/>
    <input type="text" name="description" required placeholder="|Описание"> <br/>
    <input type="submit" value="Отправить">
</form>
</body>
</html>

<?php
/*4. Создать форму для добавления новости в базу данных. Форма должна содержать title, url,
description. Для сохранения новости воспользуйтесь классом News и методом saveNews.
*/
include "dz_xml.php";
if (
    isset($_POST['title']) && isset($_POST['url']) && isset($_POST['description']) &&
    !empty($_POST['title']) && !empty($_POST['url']) && !empty($_POST['description'])){
    $new->saveNews($_POST['title'],$_POST['url'],$_POST['description']);
    echo "<a href=table_xml.php>Список новостей</a>";
}
?>