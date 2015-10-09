<?php
session_start();
/**
Сделайте две страницы: index.php и form.php. При заходе на index спросите с
помощью формы город и возраст пользователя. На form.php сделайте форму с
полями 'Name', 'Age', 'City'. При заходе на form.php сделайте так, чтобы поля 'Age' и
'City' уже были заполнены.
 */


?>
<html>
<head>
    <meta charset="utf-8">
    <title>Ваши данные</title>
</head>
<body>
<form method="post" action="session_4_1.php">
<input type="text" name="name">Введите дату <br />
<input type="text" name="age">Введите возраст <br />
<input type="text" name="city">Введите город <br />
    <input type="hidden" name="hid">
<input type="submit" name="ok" value="Отправить"><br />
</form>
</body>
</html>
<?php
if (!empty($_POST['name'])&& !empty($_POST['age'])&& !empty($_POST['city'])){
    $_SESSION['age'] = $_POST['age'];
    $_SESSION['city'] = $_POST['city'];
    //echo $_SESSION['city']; // значение сессий видет. сессии созданы
    //echo $_SESSION['age'];
}else{
    echo "Введите данные";
}
//$_SESSION['kk'] = "Kashtan"; // для проверки
//$_SESSION['city1'] = "Kashtan121d1dc2";
//$_SESSION['age1'] = "99999999999999999991111111111111c2";
?>