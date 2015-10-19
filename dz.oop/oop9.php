<?php
/**
9. Напишите класс-оболочку над cookie. Оболочка должна представлять собой набор
функций: сохранение куки, удаление куки, редактирование куки, считывание куки.
По умолчанию кука должна устанавливаться на 1 год.
 */
class cookie
{
    public $name;
    public $value;
    public $time;
    public function __construct($a,$b)
    {
        $this->name=$a;
        $this->value=$b;

    }
    public function StandartCookie()
    {
        setcookie($this->name,$this->value,time()+365*24*60*60);
    }
    // редактирование
    // задаем значение меняемого компонента
    public function SetEditCookie($edit)
    {
       $this->value=$edit;
    }
    // выводим
    public function GetEditCooKie()
    {
        setcookie($this->name,$this->value,time()+365*24*60*60);
    }
    // Считываем cookie
    public function ReadingCookie()
    {
        print_r($_COOKIE);
    }
    // удаляем
    public function DeliteCokie()
    {
        setcookie($this->name,"");
    }


}
$coo = new cookie($_SERVER['HTTP_HOST'],'lesson');
$coo->StandartCookie();
$coo->SetEditCookie('Bogdan');
$coo->GetEditCookie();
$coo->ReadingCookie();
$coo->DeliteCokie();