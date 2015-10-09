<?php
/**
 * С д е л а й т е   ф у н к ц и ю ,   к о т о р а я   с о з д а е т   ч е к б о к с .   Е с л и   ч е к б о к с   н е
 * о т м е ч е н   —   ф у н к ц и я   д о л ж н а   о т п р а в л я т ь   0   ( т о   е с т ь   н у ж н о   с д е л а т ь
 * h i d d e n   и н п у т ) ,   е с л и   о т м е ч е н   —   1
 */
function ch()
{
    $chec = "
<head>
<meta charset='utf-8'>
<title>Checkbox</title>
</head>
<body>
<form action='dz5.11.php' method='post'>
<input type='checkbox' name='ch'>
<input type='submit'>
</body>
";
    echo $chec;
    if (isset($_POST['ch'])) {
        echo "<br />" . 1;
    } else {
        echo "<br />" . 0;
    }
}

ch();