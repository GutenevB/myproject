
<?php
/**
Сделайте класс Power, который возводит число в нужную степень (не используя
стандартную функцию pow). Класс должен иметь следующие методы: 2, 3, 4, 5
степени.
 */
header('Content-type:text/html; charset=utf-8');

class GoPow
{

    public $num;

    public function __construct($number)
    {
        $this->num = $number;
        echo "Число $this->num:    ";
    }
    public function two()
    {
        echo "Возводим в степень 2. <br />";
        echo exp(2*log($this->num));
    }
    public function three()
    {
        echo "Возводим в степень 3. <br />";
        echo exp(3*log($this->num));
    }
    public function four()
    {
        echo "Возводим в степень 4. <br />";
        echo exp(4*log($this->num));
    }
    public function five()
    {
        echo "Возводим в степень 5. <br />";
        echo exp(5*log($this->num));
    }
}
$go = new GoPow(6);

echo $go->five();

