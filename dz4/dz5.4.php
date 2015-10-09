<html>
<head>
    <titel>Задача 4</titel>
</head>
<body>
<form method="post" action="dz5.4.php">
    Сколько вам лет?
    <br/><br/>
    <input type="radio" name="rad" value="t1" checked>Менее 20 лет
    <br/><br/>
    <input type="radio" name="rad" value="t2">от 20-25 лет
    <br/><br/>
    <input type="radio" name="rad" value="t3">от 26-30 лет
    <br/><br/>
    <input type="radio" name="rad" value="t4">Более 30 лет
    <br/><br/>
    <input type="submit" value="Отправить">
</form>
</body>
</html>
<?php
/**
С п р о с и т е   у   п о л ь з о в а т е л я   е г о   в о з р а с т   с   п о м о щ ь ю   н е с к о л ь к и х
r a d i o ­ к н о п о к .   В а р и а н т ы   о т в е т а   с д е л а й т е   т а к и м и :   м е н е е   2 0   л е т ,
2 0 ­ 2 5 ,   2 6 ­ 3 0 ,   б о л е е   3 0 .   Р е з у л ь т а т   в ы д а й т е   н а   э к р а н   в   в и д е т   “ В а ш
в о з р а с т   в   д и а п а з о н е   < n >   л е т ”
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
