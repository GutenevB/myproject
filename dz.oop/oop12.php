<?php
/**
12. Напишите класс-сумматор. Класс должен иметь следующие методы: сумма двух
чисел, сумма квадратов двух чисел, сумма кубов двух чисел и так далее до 5-той
степени. Класс должен наследовать методы возведения в степень от класса Power
и иметь public методы суммирования.
 */
header('Content-type:text/html; charset=utf-8');

class GoPow
{

    public $num1;
    public $num2;

    public function __construct($number1,$number2)
    {
        $this->num1 = $number1;
        $this->num2 = $number2;
        echo "Число $this->num1 и $this->num2:    ";
    }
    public function two()
    {
        echo "   Возводим в степень 2. <br />";
        echo exp(2*log($this->num1 + $this->num2));
    }
    public function three()
    {
        echo "   Возводим в степень 3. <br />";
        echo exp(3*log($this->num1 + $this->num2));
    }
    public function four()
    {
        echo "   Возводим в степень 4. <br />";
        echo exp(4*log($this->num1 + $this->num2));
    }
    public function five()
    {
        echo "   Возводим в степень 5. <br />";
        echo exp(5*log($this->num1 + $this->num2));
    }
}



echo "<hr>";
/**
12. Напишите класс-сумматор. Класс должен иметь следующие методы: сумма двух
чисел, сумма квадратов двух чисел, сумма кубов двух чисел и так далее до 5-той
степени. Класс должен наследовать методы возведения в степень от класса Power
и иметь public методы суммирования.
 */
class SumMany extends GoPow
{
    public function sum()
    {
        echo $this->two() + $this->three() + $this->four() + $this->five();
    }
}
$sum = new SumMany(6,5);
echo $sum->sum();































