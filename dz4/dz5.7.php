<?php
/**
С д е л а й т е   ф у н к ц и ю ,   к о т о р а я   с о з д а е т   и н п у т   t y p e   t e x t   и л и   p a s s w o r d .
Ф у н к ц и я   д о л ж н а   и м е т ь   с л е д у ю щ и е   п а р а м е т р ы :   t y p e ,   n a m e ,   v a l u e ,
p l a c e h o l d e r
 */
function ht($t,$n,$v){
    $res = "<input type=\"$t\" name=\"$n\" value=\"$v\" placeholder=\"$t\">";
    echo $res;
}

?>
<html>
<body>
<form method="post" action="dz5.7.php">
    <?php ht('text','tx','Привет!');?>
</form>
</body>
</html>
