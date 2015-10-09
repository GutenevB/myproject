<?php
/**
Н а п и ш и т е   ф у н к ц и ю ,   к о т о р а я   с о з д а е т   ч е к б о к с   и   с о х р а н я е т   е г о
з н а ч е н и е   п о с л е   о т п р а в к и .
 */
function ch()
{
    $chec = "
<head>
<meta charset='utf-8'>
<title>Checkbox</title>
</head>
<body>
<form action='dz5.12.php' method='post'>
<input type='checkbox' name='ch'>
<input type='submit'>
</body>
";
    echo $chec;

    if (isset($_POST['ch'])) {
        $ch1 = $_POST['ch'];
        $s1=setcookie('Yes',$ch1,time());
        echo "<br />" . 1;
    } else {

        $s2=setcookie('NO',"no-no",time());
        echo "<br />" . 0;
    }
}

ch();