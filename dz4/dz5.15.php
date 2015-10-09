<?php
/**
М о д и ф и ц и р у й т е   п р е д ы д у щ у ю   ф у н к ц и ю   т а к ,   ч т о б ы   о н а   с о х р а н я л а
в ы б р а н н ы й   э л е м е н т   п о с л е   о т п р а в к и .
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
    if (isset($_POST['lang'])) {
        setcookie("Lang", $_POST['lang'], time());
    } else {
        setcookie("Lang", $_POST['lang'], time());
    }
}

selec($arr);