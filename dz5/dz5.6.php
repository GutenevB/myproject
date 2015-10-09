<html>
<head>
    <titel>Задача 6</titel>
</head>
<body>
<form method="post" action="dz5.6.php">
    Сколько вам лет?
    <br/><br/>
    <select multiple name="rad" >
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
С п р о с и т е   у   п о л ь з о в а т е л я   с   п о м о щ ь ю   м у л ь т и с е л е к т а ,   к а к и е   и з
я з ы к о в   о н   з н а е т :   h t m l ,   c s s ,   p h p ,   j a v a s c r i p t .   В ы в е д и т е   н а   э к р а н
т е   я з ы к и ,   к о т о р ы е   з н а е т   п о л ь з о в а т е л ь .
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

