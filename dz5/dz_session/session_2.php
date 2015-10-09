<?php
session_start();
/**
 * 2. Спросите у пользователя email с помощью формы. Затем сделайте так, чтобы в
 * другой форме (имя, фамилия, пароль, email) при ее открытии поле email было
 * автоматически заполнено.
 */
?>

    <html>
    <head>
        <meta charset="utf-8">
        <title>
            Форма
        </title>
    </head>
    <body>
    <form method="post">
        <input type="hidden" name="e">
        <input type="email" name="email">
        <input type="submit" name="sb">
    </form>
    </body>
    </html>
<?php
if (!empty($_POST['email']) && isset($_POST['email'])) {
    $_SESSION['email'] = $_POST['email'];
} else {
    echo "Введите данные";
}
if (isset($_POST['e'])) {
    ?>
    <form action="" method="post">
    <input name="name" type="text" placeholder="name"><br>
    <input name="sur" type="text" placeholder="surname"><br>
    <input name="pas" type="password" placeholder="password"><br>
    <input name="mail" type="email" placeholder="email" value="<?php echo $_SESSION['email'];?>"
    <input type="hidden" name="a">
<?php } ?>