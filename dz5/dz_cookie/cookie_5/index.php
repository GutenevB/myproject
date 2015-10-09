<?php
/**
 * Created by PhpStorm.
 * User: ASUS frik
 * Date: 28.09.2015
 * Time: 1:12
 * Покажите пользователю баннер­картинку, под картинкой отобразите кнопку 'Не
 * показывать больше!'. Если он нажмет на эту кнопку — не показывайте ему баннер в
 * течении месяца.
 */

if (!isset($_COOKIE['ban'])) {
    echo '<img src=one.jpg>';
    echo '<a href=?page=1>Убрать банер</a>';
} elseif (!empty($_COOKIE['ban'])) {
    echo 'Банер удален' . '<br/>';
    echo '<a href=?page=2>показывать банер?</a>';
}
if (isset($_GET['page'])) {
    $get = $_GET['page'];
    switch ($get) {
        case 1:
            setcookie("ban", $get, time() + 3600); // один час
            header("location:index.php");
            break;
        case 2:
            setcookie("ban", "", time() - 3600);
            header("location:index.php");
            break;
    }
}

?>


