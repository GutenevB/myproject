<?php
/**
 * С д е л а й т е   ф у н к ц и ю ,   к о т о р а я   б у д е т   с о з д а в а т ь   с е л е к т .   Ф у н к ц и я
 * д о л ж н а   п р и н и м а т ь   м н о г о м е р н ы й   м а с с и в   т а к о г о   т и п а :
 * $ a r r   =   a r r a y (
 * 0 = > a r r a y ( ' v a l u e ' = > ' p h p ' ,   ' t e x t ' = > ' Я з ы к   P H P ' ) ,
 * 1 = > a r r a y ( ' v a l u e ' = > ' h t m l ' ,   ' t e x t ' = > ' Я з ы к   H T M L ' ) ,
 * )
 */
$arr = [
    ['value' => 'php', 'text' => 'Язык PHP'],
    ['value' => 'html', 'text' => 'Язык HTML']
];

function selec($arr)
{
    echo '<select name="lang">';
    foreach ($arr as $val) {
        echo '<option value="$val[\'value\']">' . $val['text'] . '</option>';
    }


    echo '</select>' . "<br />";
    echo '<input type="submit" value="Send"><br>';
}

selec($arr);