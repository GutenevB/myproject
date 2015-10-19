<?php
/**
7. Сделайте класс Sqrt, который извлекает из числа корень нужной степени
(используя pow: pow(4, 0.5) – это квадратный корень). Класс должен иметь
следующие методы: корни 2, 3, 4, 5 степени.
 */
header('Content-type:text/html; charset=utf-8');
class Sqrt
{
    public $number;

    public function __construct($b)
    {
        $this->number = $b;
    }

    public function two()
    {
        echo "Квадратный корень из $this->number =  ";
        echo pow($this->number, 0.5);
    }
    public function three()
    {
        echo "<br /> Кубический корень из $this->number =  ";
        echo pow($this->number,1/3);
    }
    public function four()
    {
        echo "<br />  Корень 4-й степени из $this->number =  ";
        echo pow($this->number,1/4);
    }
    public function five()
{
    echo "<br /> Корень 5-й степени из $this->number =  ";
    echo pow($this->number,1/5);
}

}
$sqrt = new Sqrt(144);
$sqrt->two();
$sqrt->three();
$sqrt->four();
$sqrt->five();
