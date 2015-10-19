<?php
/**
4. Добавьте в класс User метод getUserInfo. В методе должен формироваться
массив. В качестве ключей должны быть свойства класса: firstname, lastname,
email, phone. В качестве значений должны быть значения этих свойств. Значения
свойств должны быть получены с помощью функций get... (getFirstName,
getLastName и т.д.).
 */
header('Content-type:text/html; charset=utf-8');
class User
{
    public $firstname;
    public $lastName;
    public $phone;
    public $email;
    protected $clients = array();

    public function getUserInfo()
    {
        $this->clients['firstname'] = $this->getFirstName();
        $this->clients['lastname'] = $this->getLastName();
        $this->clients['email'] = $this->getEmail();
        $this->clients['phone'] = $this->getPhone();

        return ($this->clients);
    }
    public function setLastName($last)
    {
        $this->lastName=$last;
    }
    public function getLastName()
    {
        return $this->lastName;
    }
    public function setPhone($number)
    {
        $this->phone=$number;
    }
    public function getPhone()
    {
        return $this->phone;
    }
    public function setEmail($email)
    {
        $this->email=$email;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setFirstName($first)
    {
        $this->firstname=$first;
        echo 'Имя внесено в список<br />';

    }
    public function getFirstName()
    {
        return $this->firstname;
    }
}
$user = new User();
$user->setEmail('bogdan.cifrovoi@gmail.com');
$user->setFirstName('Bogdan');
$user->setLastName('Gutenev');
$user->setPhone('0637363912');

echo "<pre>";
    print_r($user->getUserInfo());
echo "</pre>";

foreach($user as $key=>$value){
    echo "<b>$key</b>". ":   ".$value. "<br />";
}

// Вариант № 2
echo "<hr/>";
class User1
{
    public $firstname;
    public $lastName;
    public $phone;
    public $email;

    public function getUserInfo()
    {
        return [
            'firstname' => $this->getFirstName(),
            'lastname' => $this->getLastName(),
            'email' => $this->getEmail(),
            'phone' => $this->getPhone()
        ];

    }
    public function setLastName($last)
    {
        $this->lastName=$last;
    }
    public function getLastName()
    {
        return $this->lastName;
    }
    public function setPhone($number)
    {
        $this->phone=$number;
    }
    public function getPhone()
    {
        return $this->phone;
    }
    public function setEmail($email)
    {
        $this->email=$email;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setFirstName($first)
    {
        $this->firstname=$first;
        echo 'Имя внесено в список<br />';

    }
    public function getFirstName()
    {
        return $this->firstname;
    }
}
$user = new User1();
$user->setEmail('bogdan.cifrovoi@gmail.com');
$user->setFirstName('Bogdan');
$user->setLastName('Gutenev');
$user->setPhone('0637363912');
//$user->getFirstName();
//echo "<br />";
//$user->getLastName();
//echo "<br />";
//$user->getPhone();
//echo "<br />";
//$user->getEmail();
echo "<pre>";
print_r($user->getUserInfo());
echo "</pre>";
