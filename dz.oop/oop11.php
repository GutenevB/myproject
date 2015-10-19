<?php
/**
1. Напишите оболочку над сессиями. Оболочка должна представлять собой набор
функций: сохранение в сессию, считывание из сессии, удаление всех переменных
сессии. Сессия должна стартовать в функции __construct.
 */
class NewSession
{
    public $name;
    public function __construct()
    {
        session_start();
    }
    public function SaveSession($a)
    {
        $this->name=$a;
        $_SESSION['source']=$this->name;
    }
    public function ReadSession()
    {
       print_r($_SESSION['source']);
    }
    public function DelSession()
    {
        unset($_SESSION['source']);

        session_destroy();
    }

}
//$newsession = new NewSession();
//$newsession->SaveSession('Hello');
//$newsession->ReadSession();
$newsession->DelSession();