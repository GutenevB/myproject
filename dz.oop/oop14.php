<?php
/**
14. Сделайте класс, который подключает внешние файлы к html странице, такие как
CSS и JS. Класс должен иметь методы getCss и getJs.
 */
class CssJs
{
    public function FormHtml()
    {
        echo "<html>
    <head>
    <meta charset='utf-8'>
    <link href='self::FormHtml' type='text/css' rel='stylesheet'>
    </head>
    <body>
    <b>Hello</b>
    <input type='self::FormHtml2'>
    </body>
    </html>";
    }
     public function FormCSS()
    {
        echo'add/css1.css';
    }
    public function FormHtml2()
    {
        echo "text";
    }
}
$stl = new CssJs();
$stl ->FormHtml();