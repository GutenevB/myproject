    <?php
    /**
     * Даны два файла, состоящие из предложений. Создать третий файл, содержащий все
     * предложения, которые есть хотя бы в одном из файлов. Повторы не добавлять в
     * третий файл
     */

    $one = fopen("text/dz6_3_one.txt", 'a+');
    $file_name1 = "text/dz6_3_one.txt";
    $fr1 = fread($one, filesize($file_name1));
    $arr_one1 = explode(".", $fr1);
    print_r($arr_one1);
    fclose($one);
    //второй файл
    $two = fopen("text/dz6_3_two.txt", 'a+');
    $file_name2 = "text/dz6_3_two.txt";
    $fr2 = fread($two, filesize($file_name2));
    $arr_one2 = explode(".", $fr2);
    print_r($arr_one2);
    fclose($two);
    $new_open1 = fopen("text/dz6_3_result.txt","a+");
    $new_open2 = fopen("text/dz6_3_error.txt","a+");
    foreach ($arr_one1 as $val1) {
            if (!in_array($val1, $arr_one2)) {
                fwrite($new_open1,$val1);
            }else{
                fwrite($new_open2,$val1);
            }

        }
        foreach ($arr_one2 as $val2) {
            if(!in_array($val2, $arr_one1)){
                fwrite($new_open1,$val2);
            }else{
                fwrite($new_open2,$val2);
        }
    }