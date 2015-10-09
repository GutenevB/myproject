<?php
/* С д е л а й т е   ф у н к ц и ю ,   к о т о р а я   с о з д а е т   t e x t a r e a .   Ф у н к ц и я   д о л ж н а
и м е т ь   с л е д у ю щ и е   п а р а м е т р ы :   n a m e ,   v a l u e ,   p l a c e h o l d e r .
*/
function area($name, $value, $placeholder)
{
    $area = "
<html>
<head>
<title>ПРивет!</title>
<meta charset='UTF-8'>
</head>
<body>
<form action='dz5.9.php' method='post'>
<textarea name=\"$name\" value=\"$value\" placeholder=\"$placeholder\">
</textarea>
</body>
</html>";
    echo $area;

}
area('tr','tr','Hello');

?>
