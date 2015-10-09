<?php
/*
М о д и ф и ц и р у й т е   ф у н к ц и ю   и з   п р е д ы д у щ е й   з а д а ч и   т а к ,   ч т о б ы   о н а
с о х р а н я л а   з н а ч е н и е   t e x t a r e a   п о с л е   о т п р а в к и .
*/
function area($name, $value, $placeholder)
{
    $area = "
<html>
<head>
<title>Привет!</title>
<meta charset='UTF-8'>
</head>
<body>
<form method='get' action='dz5.10.php'>
<textarea name=\"$name\" value=\"$value\" placeholder=\"$placeholder\">
</textarea>
<input type=\"submit\" name=\"otp\" value=\"Отправить\">
</body>
</html>";
    echo $area;
   if (isset($_GET['otp'])){
        $pt = $_GET['otp'];
        echo $pt;
    }
}
area('tr','tr','Hello');

?>