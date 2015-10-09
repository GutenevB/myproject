<?php
/**
 * М о д и ф и ц и р у й т е   п р е д ы д у щ у ю   з а д а ч у   т а к ,   ч т о б ы   п о   у м о л ч а н и ю   б ы л а
 * в ы б р а н а   т е к у щ а я   д а т а   и   с е л е к т ы   с о х р а н я л и   в ы б р а н н ы е   з н а ч е н и я
 * п о с л е   о т п р а в к и .
 */
function trio($min, $max)
{
    echo '<form action="dz5.17.php" method="post">';
    echo '<select name="sl">';


    for ($i = 1; $i <= 31; $i++) {
        $d = date('d');
        if ($i == $d) {
            echo '<option selected="selected" value="$i">' . $i . '</option>';
        } else {
            echo '<option value="$i">' . $i . '</option>';
        }
    }
    echo '</select>';
    echo '<select>';
    for ($i = 1; $i <= 12; $i++) {
        $m = date('F');
        $count = date('F', mktime(0, 0, 0, $i, 0, 0));
        if ($m == $count) {
            echo '<option selected="selected" value="$count">' . $count . '</option>';
        } else {
            echo '<option value="$count">' . $count . '</option>';
        }
    }
    echo '</select>';
    echo '<select>';
    for ($i = $min; $i <= $max; $i++) {
        $y = date('Y');
        if ($y == $i) {
            echo '<option selected="selected" value="$i">' . $i . '</option>';
        } else {
            echo '<option value="$i">' . $i . '</option>';
        }
    }
    echo '</select>';
    echo '<input type="submit">';


}

trio(1970, 2016);