<?php
session_start();
/**
Сделайте счетчик обновления страницы пользователем. Данные храните в сессии.
Скрипт должен выводить на экран количество обновлений. При первом заходе на
страницу он должен вывести сообщение о том, что вы еще не обновляли страницу.
 */
if (!isset($_SESSION['count'])){
    $_SESSION['count'] = 0;
    echo "Обновите страницу";
}else{
    echo $_SESSION['count']++;
}