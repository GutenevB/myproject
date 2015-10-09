<?php
/**
Запишите в сессию время захода пользователя на сайт. При обновлении страницы
выводите сколько секунд назад пользователь зашел на сайт.
 */
session_start();
if (!isset($_SESSION['data'])){
    $time = time();
    $_SESSION['data'] = $time;
    echo "Обновите странницу";
}else{
    $data = time() - $_SESSION['data'];
    echo $data;
}