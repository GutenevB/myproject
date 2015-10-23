<?php
/**
1. Создать таблицу news с полями: title, url, description, created_at.
 */
//CREATE DATABASE library;
# USE library;
# CREATE TABLE news (
#   `title` VARCHAR(50) NOT NULL ,
#   `url` VARCHAR(100) NOT NULL ,
#   `description` VARCHAR(100) NOT NULL ,
#   `created_at` DATETIME NOT NULL
# );
/**
 *
2.Создать класс News с методами:
­saveNews ­ сохранение новости в БД
­getNews ­ получение новостей из БД
 */
class News
{
    public function getError()
    {
        echo mysql_error(). mysql_errno();
    }
    public function connect($host="localhost",$login="root",$pass="root",$dataB="library",$port='3306')
    {
        return mysqli_connect($host,$login,$pass,$dataB,$port);
    }
    public function saveNews($title,$url,$description)
    {
        $s = "INSERT INTO news (`title`,`url`,`description`,`created_at`) VALUES ('$title','$url','$description',NOW())";
        $save = mysqli_query($this->connect(),$s);
        if ($save){
            $text = "Новость добавлена  " . date('d:m:Y H:i:s') . "\r";
            $open = fopen("register_news.txt","a+");
            $write= fwrite($open,$text);
            fclose($open);
            return true;
        }else{
            $text = "Ошибка  " . $this->getError(). "\r";
            $open = fopen("error.txt","a+");
            $write= fwrite($open,$text);
            fclose($open);
            return false;
        }
    }
    public function getNews()
    {
        $res="SELECT * FROM news";
        $sql = mysqli_query($this->connect(),$res);
        return mysqli_fetch_all($sql);
    }
}

$new= new News();
//$new->saveNews('Bogdan', 'Gutenev', 'Hello');
//var_dump($new->getNews());
/*3. Создать класс RssNews с методами:
­buildRss ­ построение dom­структуры и сохранение результата в файл
­getRss ­ загрузка списка новостей из файла и возврат результата.
 */
class RssNews
{
    public function buildsRss(News $news)
    {
        $array_news = $news->getNews();
        $dom = new DOMDocument('1.0', 'utf-8');
        $dom -> formatOutput = true;// создает отступы и дополняет пробелы
        $rss = $dom->createElement('rss');//создает новый элемент
        $dom-> appendChild($rss);//говорим что у дома появился глава семьи
        $title = $dom->createElement('title','News');//создаем новый элемент
        $rss->appendChild($title);//говорит это мой ребенок
        foreach ($array_news as $value) {
            $item = $dom->createElement('item');//создаем новый элемент

            $iTitle = $dom->createElement('title',$value[0]);//создаем новый элемент
            $iUrl = $dom->createElement('url',$value[1]);//создаем новый элемент
            $iDescription = $dom->createElement('description',$value[2]);//создаем новый элемент
            $iCreated_at = $dom->createElement('created_at',$value[3]);//создаем новый элемент

            $item->appendChild($iTitle);//говорит что у него тоже есть дети.Их дед $rss
            $item->appendChild($iUrl);//говорит что у него тоже есть дети.Их дед $rss
            $item->appendChild($iDescription);//говорит что у него тоже есть дети.Их дед $rss
            $item->appendChild($iCreated_at);//говорит что у него тоже есть дети.Их дед $rss

            $rss->appendChild($item);
        }
        $dom->save('rss_tape.xml');

    }
}
$rssNew = new RssNews();
$rssNew->buildsRss($new);

