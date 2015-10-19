<?php
/**
18. Создать абстрактный класс User. У класса есть свойства firstname, lastname, email,
phone. Также есть абстрактный метод getUserInfo. Также у класса есть protected
методы: setFirstName, setLastName, setEmail, setPhone. Также необходимо
реализовать методы get для этих же свойств.
Создать класс Patient, который расширяет класс User и реализует метод
getUserInfo возвращая массив из значений свойств. Свойства необходимо
получать через реализованные методы getFirstName, getLastName и т.д.
Данные для свойств устанавливаются через экземпляр класса Patient.
 */
header('Location-type:text/html; charset=utf-8');

abstract class User
{
    public $firstname;
    public $lastname;
    public $email;
    public $phone;

    abstract public function getUserInfo();

    protected function setFirstName($fm)
    {
        $this->firstname=$fm;
    }
    protected function getFirstName()
    {
        echo $this->firstname;
    }

    protected function setLastName($ln)
    {
        $this->lastname=$ln;
    }
    protected function getLastName()
    {
        echo $this->lastname;
    }

    protected function setEmail($e)
    {
        $this->email=$e;
    }
    protected function getEmail()
    {
        echo $this->email;
    }

    protected function setPhone($p)
    {
        $this->phone=$p;
    }
    protected function getPhone()
    {
        echo $this->phone;
    }
}
class Patient extends User
{
    public $clients;
    public $firstname1;
    public $lastname1;
    public $email1;
    public $phone1;


    public function __construct($firstname2,$lastname2,$email2,$phone2)
    {
        $this->firstname1=$firstname2;
        $this->lastname1=$lastname2;
        $this->email1=$email2;
        $this->phone1=$phone2;
    }

    protected function getFirstName1()
    {
        return $this->firstname1;
    }

    protected function getLastName1()
    {
        return $this->lastname1;
    }

    protected function getEmail1()
    {
        return $this->email1;
    }

    protected function getPhone1()
    {
        return $this->phone1;
    }

    public function getUserInfo()
    {
        $this->clients['firstname'] = $this->getFirstName1();
        $this->clients['lastname'] = $this->getLastName1();
        $this->clients['email'] = $this->getEmail1();
        $this->clients['phone'] = $this->getPhone1();
        print_r($this->clients);
    }
}
$patient=new Patient('Bogdan','Gutenev','b.g@c',063736312);
$patient->getUserInfo();
