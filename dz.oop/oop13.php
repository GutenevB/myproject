<?php
/**
13. Сделайте класс-оболочку над БД. Методы класса: получение из базы данных,
вставка в базу данных, подсчет количества записей.
*/
header('Content-type:text/html; charset=utf-8');
class Base
{
    public $id;
    public $title;
    public $desc;

    public function connect()
    {
        $link = mysqli_connect("localhost","root","root","library",3306);
        if ($link){
            echo "К базе подключено";
        }else{
            echo "Нет подключения";
        }
        return $link;
    }
    public function setAdd($title,$desc)
    {
        $this->title = $title;
        $this->desc = $desc;
        $sql = "INSERT INTO book (`title`,`desc`) VALUE ('$title','$desc')";
        $query = mysqli_query($this->connect(), $sql);
        echo "<br /> Сохранено.";
    }
    public function getBd($id)
    {
        $connect = $this->connect();
        $this->id=$id;
        $sql = "SELECT title FROM users WHERE `id` = '$this->id' ";
        $query = mysqli_query($connect, $sql);
        return $query;
    }
}
$base= new Base();
//$base->setAdd('Pushkin','Aleksandr');
echo $base->getBd(2);
