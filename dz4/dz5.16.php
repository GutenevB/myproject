<?php
/**
С д е л а й т е   3   с е л е к т а ,   к о т о р ы е   п о з в о л я ю т   в ы б и р а т ь   д а т у :   с е л е к т
с   д н я м и   о т   1   д о   3 1 ,   с е л е к т   с   р у с с к и м и   н а з в а н и я м и   м е с я ц е в ,
с е л е к т   с   г о д а м и .   Р е а л и з у й т е   ф у н к ц и ю ,   к о т о р а я   б у д е т   с о з д а в а т ь
п о д о б н ы й   с е л е к т .   Ф у н к ц и я   д о л ж н а   п р и н и м а т ь   п а р а м е т р о м   д и а п а з о н
г о д о в ,   з а   к о т о р ы й   с л е д у е т   п о к а з ы в а т ь   д а т у .
 */

function trio($min,$max){
    echo '<select>';
    for ($i= 1;$i<=31;$i++) {
        echo '<option value="$i">'.$i.'</option>';
    }
    echo '</select>';
    echo '<select>';
    for ($i= 1;$i<=12;$i++) {
        $count = date('F', mktime(0,0,0,$i,0,0));
        echo '<option value="$count">'.$count.'</option>';
    }
    echo '</select>';
    echo '<select>';
    for ($i= $min;$i<=$max;$i++) {

        echo '<option value="$count">'.$i.'</option>';
    }
    echo '</select>';
}
trio(1970,2016);