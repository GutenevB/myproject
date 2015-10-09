<?php
/**
 * Даны два файлы со словами, разделенными пробелами. Создать новый файл,
 * содержащий:
 * а) строки, которые встречаются только в первом файле;
 * б) строки, которые встречаются в обоих файлах;
 * в) строки, которые встречаются в каждом файле более двух раз.
 */
$arr1 = file("text/poem.txt");
$arr2 = file("text/poem1.txt");
$a1 = fopen('text/poem.txt','r+');
$a2 = fopen('text/poem1.txt','r+');
$cont1 = fread($a1,filesize('text/poem.txt'));
$cont2 = fread($a2,filesize('text/poem.txt'));
fclose($a1);
fclose($a2);
//строки из первого файла
if(isset($a1)){
    $new_open1 = fopen("text/dz6_2_d.txt",'w+');
    $new_content1 = fwrite($new_open1,$cont1);
    fclose($new_open1);
}
//строки, которые встречаются в обоих файлах

$new_open2 = fopen("text/dz6_2_b.txt",'w+');
foreach ($arr1 as $val){
    if (in_array($val,$arr2)){
        fwrite($new_open2,$val);
    }
}
fclose($new_open2);
//строки, которые встречаются только в первом файле;
$new_open3 = fopen("text/dz6_2_a.txt",'w+');
foreach ($arr1 as $val){
    if (!in_array($val,$arr2)){
        fwrite($new_open3,$val);
    }
}
fclose($new_open3);
//строки, которые встречаются в каждом файле более двух раз.
$new_open4 = fopen("text/dz6_2_c.txt",'w+');
$count = 0;
foreach ($arr1 as $val){
    if (!in_array($val,$arr2)){
        $count++;
        if($count <= 2) {
            fwrite($new_open4, $val);
        }
    }
}
fclose($new_open4);