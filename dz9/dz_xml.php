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
    public function buildsRss()
    {
        if ($new->getNews()){
            $open = fopen('rss_tape.xml','a+');
            fwrite($open,"<tape>");
            fclose($open);
            foreach($new->getNews() as $value){
                $open = fopen('rss_tape.xml','a+');
                fwrite($open,"\n  <subject>$value[0]</subject>");
                fwrite($open,"\n     <address>$value[1]</address>");
                fwrite($open,"\n     <tags>$value[2]</tags>");
                fwrite($open,"\n     <date>$value[3]</date>");
            }
            fwrite($open,"\n</tape>");
        }
    }
}



