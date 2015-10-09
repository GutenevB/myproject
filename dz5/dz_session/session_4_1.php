<?php
session_start();

if (isset($_POST['hid']) && !isset($_POST['hid1'])) {?>
    <html>
    <head>
        <meta charset="utf-8">
        <title>Ваши данные</title>
    </head>
    <body>
    <form method="post">
        <input type="text" name="name1">Введите дату <br/>
        <input type="text" name="age1" value="<?php  if(!empty($_POST['age']) && isset($_POST['ok'])){
            echo $_SESSION['age'];
        } ?>">Введите возраст <br/>
        <input type="text" name="city1" value="<?php if(!empty($_POST['city']) && isset($_POST['ok'])){
            echo $_SESSION['city'];
        } ?>">Введите город <br/>
        <input type="hidden" name="hid1">
        <input type="submit" name="ok1" value="Отправить"><br/>
    </form>
    </body>
    </html>
<?php } ?>