<?php
/**
 * Created by PhpStorm.
 * User: ASUS frik
 * Date: 28.09.2015
 * Time: 21:35
 * Спросите дату рождения пользователя. При следующем заходе на сайт напишите
 * сколько дней осталось до его дня рождения. Если сегодня день рождения
 * пользователя — поздравьте его!
 */
function formData()
{
    $form = '
    <head>
    <meta charset="utf-8">
    <title>Введите дату</title>
</head>
<body>
<form method="post" action="index.php">
<input type="text" name="text">Введите дату рождения в формате dd-mm-YY<br/>
<input type="submit" value="Отправить">
</form>
</body>';
    echo $form;
}

if (!isset($_COOKIE['data'])) {
    formData();
}
if (isset($_POST['text'])) {
    $user = $_POST['text'];
    setcookie('data',$user, time()+84600);
    $exp = explode("-",$_POST['text']);
    $data = date('Y-m-d',mktime(0,0,0,$exp[1],$exp[2],$exp[0]));
    // узнаем текущую дату
    $today = date('Y-m-d',time());
    $exp1 = explode("-",$today);
    $today1= date('Y-m-d',mktime(0,0,0,$exp1[1],$exp1[2],$exp1[0]));
    //$res = $data - $today1;
    //$res = date('d',$res);
  $res =  date('d',strtotime($data))- date('d',strtotime($today1));

    echo "<br/>".$data;
    echo "<br/>".$today1;
    echo "<br/>".$res;
    // неверный вывод даты
}
