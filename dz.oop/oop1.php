<?php
/**
1. Сделайте класс User. Создайте в классе публичное свойство firstname и два
публичных метода: setFirstName и getFirstName. Создайте экземпляр класса.
Используя экземпляр и метд setName сохраните в свойство name текствое
значение. С помощью экземпляра и метода getName получите текствое значение,
сохраненное в свойстве name.
 */
header('Content-type:text/html; charset=utf-8');
class User
{
    public $firstname;
    public function setFirstName($name)
    {
        $this->firstname=$name;
        echo 'Имя внесено в список<br />';

    }
    public function getFirstName()
    {
        echo $this->firstname;
    }
}
$user = new User();
$user->setFirstName('Матвей');
$user->getFirstName();
