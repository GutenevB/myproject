<?php
/**
 * Created by PhpStorm.
 * User: ASUS frik
 * Date: 29.09.2015
 * Time: 0:22
 * Написать функцию, которая будет показывать список всех файлов в данной папке
(поиск файлов происходит и во всех вложенных уровнях).
 */

if ($handle = opendir('text')) {
    echo "Дескриптор каталога: $handle\n";
    echo "Записи:\n";

    /* Именно этот способ чтения элементов каталога является правильным. */
    while (false !== ($entry = readdir($handle))) {
        echo "$entry\n";
    }
    closedir($handle);
}