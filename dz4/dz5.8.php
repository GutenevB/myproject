<?php
/**
М о д и ф и ц и р у й т е   ф у н к ц и ю   и з   п р е д ы д у щ е й
з а д а ч и   т а к ,   ч т о б ы   о н а
с о х р а н я л а   з н а ч е н и е   и н п у т а   п о с л е   о т п р а в к и
 */

function ht($t,$n,$v){
    $res = "<input type=\"$t\" name=\"$n\" value=\"$v\" placeholder=\"$t\">";
    echo $res;
}

?>
<html>
<head>
    <meta charset=utf-8>
    <title>Задача 8</title>
</head>
<body>
<form method="post" action="dz5.7.php">
    <?php ht('password','hello','Привет!');?>
</form>
</body>
</html>
