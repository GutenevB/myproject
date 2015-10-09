<?php
/**
Дан файл со словами. Упорядочить слова по алфавиту.
 */
$open_file = fopen("text/dz6_4_alphabet.txt", "r");
$dir = "text/dz6_4_alphabet.txt";
$f = fread($open_file,filesize($dir));
$exp = explode(" ",$f);
print_r($exp);
$sort = sort($exp);
print_r($sort);
$new_file_sort=fopen("text/dz6_4_alphabet_sort.txt", "a");
fwrite($new_file_sort,$sort);
fclose($new_file_sort);
// записывает в результат 1.