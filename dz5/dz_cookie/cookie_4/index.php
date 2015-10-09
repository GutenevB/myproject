<?php
/**
 * Сделайте на сайте 5 картинок с товарами. Реализуйте корзину. Под каждой
 * картинкой должна быть ссылка 'положить в корзину'. По нажатию на эту ссылку этот
 * товар должен занестись в корзину (сессия), также должна увеличиться общая
 * сумма, которую должен заплатить пользователь (сумма также должна быть указана
 * под картинками с товарами).
 */
?>

<html>
<head>
    <title>Корзина</title>
    <meta charset="utf-8">
</head>
<body>
<form action="index.php" method="post">
    <img src="img/c1.jpeg" alt="Apple watch"><br/>
    Цена : 10500<br/>
    <input type="submit" value="Положить в корзину" name="basket"><br/>
    <img src="img/c2.jpg" alt="Apple watch"><br/>
    Цена : 11500<br/>
    <input type="submit" value="Положить в корзину" name="basket"><br/>
    <img src="img/c3.jpg" alt="Apple watch"><br/>
    Цена : 12500<br/>
    <input type="submit" value="Положить в корзину" name="basket"><br/>
    <img src="img/c4.jpeg" alt="Apple watch"><br/>
    Цена : 13500<br/>
    <input type="submit" value="Положить в корзину" name="basket"><br/>
    <img src="img/c5.JPG" alt="Apple watch"><br/>
    Цена : 14500<br/>
    <input type="submit" value="Положить в корзину" name="basket"><br/>
</form>
</body>
</html>