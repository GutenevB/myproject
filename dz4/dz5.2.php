<html>
<head>
    <title> Задача 2</title>
</head>
<body>
<form method="get" action="dz5.2.php">
<title>Укажите знакомые Вам языки</title>
    <ul>
    <li><input type="checkbox" name="ch1">PHP</li>
    <li><input type="checkbox" name="ch2">HTML</li>
    <li><input type="checkbox" name="ch3">CSS</li>
    <li><input type="checkbox" name="ch4">JS</li>
</ul>
    <input type="submit" value="Отправить">
    <br /><br />
</body>
</html>
<?php
/* С п р о с и т е   у   п о л ь з о в а т е л я ,   к а к и е   и з   я з ы к о в   о н   з н а е т :   h t m l ,   c s s ,
p h p ,   j a v a s c r i p t .   В ы в е д и т е   н а   э к р а н   т е   я з ы к и ,   к о т о р ы е   з н а е т
п о л ь з о в а т е л ь .   Е с л и   п о л ь з о в а т е л ь   н е   о т м е т и л   н и   о д и н   я з ы к   —
в ы в е д и т е   н а   э к р а н   с о о б щ е н и е   о б   э т о м .
*/
/*if((empty($_GET['ch1']))&& (empty($_GET['ch2']))&&(empty($_GET['ch3']))&&(empty($_GET['ch4']))){
    echo "";
}*/
if (isset($_GET['ch1'])){
    echo "Вам знаком - PHP". "<br/>";
}if(isset($_GET['ch2'])) {
    echo "Вам знаком - HTML"  . "<br/>";
}if(isset($_GET['ch3'])) {
    echo "Вам знаком -CSS "  . "<br/>";
}if(isset($_GET['ch4'])) {
    echo "Вам знаком - JS "  . "<br/>";
}else{
    echo "Учитесь!";
}
?>