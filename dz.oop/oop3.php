<?php
/**
3. Добавьте в класс User конструктор, который принимает в качестве параметров
firstname, lastname, email, phone. Каждое свойство сохраните с помощью й
своефункции set... ,
 */
header('Content-type:text/html; charset=utf-8');
class User
{
    public $firstname;
    public $lastName;
    public $phone;
    public $email;

    public function __construct($last1,$number1,$email1,$first)
    {
        $this->setLastName($last1);
        $this->setPhone($number1);
        $this->setEmail($email1);
        $this->setFirstName($first);
    }
    public function setLastName($last)
    {
        $this->lastName=$last;
    }
    public function getLastName()
    {
        echo $this->lastName;
    }
    public function setPhone($number)
    {
        $this->phone=$number;
    }
    public function getPhone()
    {
        echo $this->phone;
    }
    public function setEmail($email)
    {
        $this->email=$email;
    }
    public function getEmail()
    {
        echo $this->email;
    }
    public function setFirstName($first)
    {
        $this->firstname=$first;
        echo 'Имя внесено в список<br />';

    }
    public function getFirstName()
    {
        echo $this->firstname;
    }
}
$user = new User('Guteneva','0637363912','b@v.ua','Zhanna');
$user->getFirstName();
$user->getLastName();
$user->getEmail();
$user->getPhone();