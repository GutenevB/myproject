<?php
/**
Д а н   ч е к б о к с .   С д е л а й т е   т а к ,   ч т о б ы   п о с л е   о т п р а в к и   ф о р м ы   е г о
з н а ч е н и е   с о х р а н я л о с ь   ( о т м е ч е н   и л и   н е   о т м е ч е н )
 */
?>

<head>
<meta charset='utf-8'>
<title>Checkbox</title>
</head>
<body>
<form action='dz5.12.php' method='post'>
<input type='checkbox' name='ch'>
<input type='submit'>
</body>
<?php
    if (isset($_POST['ch'])) {
        $ch1 = $_POST['ch'];
        $s1=setcookie('Yes',$ch1,time());
        echo "<br />" . 1;
    } else {

        $s2=setcookie('NO',"no-no",time());
        echo "<br />" . 0;
    }



