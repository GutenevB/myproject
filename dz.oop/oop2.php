<?php
/**
2. В тот же класс User добавьте несколько свойств: lastname, email, phone. Создайте
по два публичных метода set и get на каждое свойство по аналогии с предыдущим
заданием.
 */
header('Content-type:text/html; charset=utf-8');
class User
{
    public $firstname;
    public $lastName;
    public $phone;
    public $email;

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
$user = new User();
$user->setEmail('bogdan.cifrovoi@gmail.com');
$user->setFirstName('Bogdan');
$user->setLastName('Gutenev');
$user->setPhone('0637363912');
echo $user->getFirstName(). "<br />". $user->getLastName(). "<br />".$user->getPhone(). "<br />".$user->getEmail();