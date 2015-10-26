<?php
/*
 * 5. Создать html­станицу для отображения новостей. В начале файла создайте экземпляр
класса News и получите список новостей из БД. Затем создайте экземпляр класса RssNews,
сформируйте rss с помощью метода buildRss передав полученный список новостей. Затем
получите rss­ленту с помощью метода getRss.
Ниже постройте html с шапкой колонок: title, url, description, date. С помощью цикла foreach
сформируйте вывод новостной ленты.
 */
include_once "dz_xml.php";
$rssNew = new RssNews();
$rss = $rssNew->getRss();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Get RSS</title>
</head>
<body>
<a href="index.php">Добавить новость</a>
<table border="1" width="100%">
    <tr>
        <td align="center"><h3>Title</h3></td>
        <td align="center"><h3>Url</h3></td>
        <td align="center"><h3>Description</h3></td>
        <td align="center"><h3>Date</h3></td>
    </tr>
    <?php
    foreach ($rss['rss']['item'] as $value) {
        echo '<tr>';
        echo '<td align="center">';
        echo $value['title'];
        echo '</td>';
        echo '<td align="center">';
        echo $value['url'];
        echo '</td>';
        echo '<td align="center">';
        echo $value['description'];
        echo '</td>';
        echo '<td align="center">';
        echo $value['created_at'];
        echo '</td>';
        echo '</tr>';
    }
    ?>
</table>
</body>
</html>