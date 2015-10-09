<html>
<head>
<title>Задача 1</title>
</head>
<body>
<form method="POST" action="dz5.1.php">
    <label>Введите имя</label>
    <input type="text" name="text">
    <br/><br/>
    <input type="checkbox" name="ch">Запомни меня
    <br/><br/>
    <input type="submit" value="Отправить">
</body>
</html>
<?php
/*С п р о с и т е   у   п о л ь з о в а т е л я   и м я   с   п о м о щ ь ю   ф о р м ы .   С д е л а й т е   ч е к б о к с :
е с л и   о н   о т м е ч е н ,   т о   п о п р и в е т с т в у й т е   п о л ь з о в а т е л я ,   е с л и   н е
о т м е ч е н   —   п о п р о щ а й т е с ь   с   п о л ь з о в а т е л е м
*/
if (empty($_POST['text'])) {
    echo "Введите имя";
} else {
    $text = $_POST['text'];
    if (isset ($_POST['ch'])) {
        echo "Привет, " . $text;
    } else {
        echo "Ставьте галочку и приходите";
    }
}
?>