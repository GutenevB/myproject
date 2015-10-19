<?php
/**
15. Сделайте класс, который добавляет тег мета на сайт (кодировка, description,
keywords).
 */
class Meta
{
    public function SetMeta()
    {
        echo "<meta charset='utf-8' name='Keywords' content='go to site'>
<meta name='Description' content='very good'>";
    }
    public function FormHtml()
    {
        echo "<html>
    <head>";
        self::SetMeta();
            echo "
    <link href='self::FormHtml' type='text/css' rel='stylesheet'>
    </head>
    <body>
    <b>Hello</b>
    </body>
    </html>";
    }
}
$meta = new Meta();
$meta->FormHtml();
