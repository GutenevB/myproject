<?php
/**
 * С помощью функции необходимо создать файл. В файл записывается некая
 * переменная $a, которая хранит число. При каждом обращении к скрипту необходимо
 * увеличивать значение этой переменной на единицу. Результат записывать обратно в
 * этот же файл.
 */
function new_file()
{
    $count = 0;
    $open = fopen("file.txt", "w");
    if ($open) {
        fwrite($open, $count);
        $count++;
    }

    fclose($open);
}

new_file();