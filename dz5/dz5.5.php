<html>
<head>
    <titel>Задача 5</titel>
</head>
<body>
<form method="post" action="dz5.5.php">
    Сколько вам лет?
    <br/><br/>
    <select name="rad">
        <option disabled>Сколько вам лет?</option>
        <option value="t1">Менее 20 лет</option>
        <option value="t2">от 20-25 лет</option>
        <option value="t3">от 26-30 лет</option>
        <option value="t4">Более 30 лет</option>
    </select>
    <input type="submit" value="Отправить">
</form>
</body>
</html>
<?php
/**
С п р о с и т е   у   п о л ь з о в а т е л я   е г о   в о з р а с т   с   п о м о щ ь ю   s e l e c t .   В а р и а н т ы
о т в е т а   с д е л а й т е   т а к и м и :   м е н е е   2 0   л е т ,   2 0 ­ 2 5 ,   2 6 ­ 3 0 ,   б о л е е   3 0
 */
if (isset($_POST['rad'])) {
    echo "Вам: ";
    switch ($_POST['rad']) {
        case 't1':
            echo "менее 20 лет";
            break;
        case 't2':
            echo "от 20-25 лет";
            break;
        case 't3':
            echo "от 26-30 лет";
            break;
        case 't4':
            echo "более 30 лет";
            break;
    }
}
