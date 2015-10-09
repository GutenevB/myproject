<?php
/**
Дан файл. Каждая строка содержит имя, пароль и email, разделенные символами ':'
(двоеточие). Удалить строки с повторами email. Удалить строки, в которых имена
совпадают.
 */

$handle = fopen("text/dz6_5.txt", "r");
$count = 0;
$arr =[];
while(!feof($handle)){
    $buf = fgets($handle,filesize("text/dz6_5.txt"));
    $exp = explode(":",$buf);
    $arr[$count] = $exp;
    $count++;
}
foreach ($arr as $k=>$value) {
    foreach ($value as $f) {
        for ($i = 0; $i <= count($value); $i++) {
            if ($value[$i][]) {
                echo $value[$i];
            }
        }

    }
}




//var_dump($arr);