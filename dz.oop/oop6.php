<?php
/**
Сделайте класс-калькулятор. Класс должен иметь следующие методы: сложение,
вычитание, умножение, деление. Каждый метод должен принимать параметром
два числа.
 */
header('Content-type:text/html; charset=utf-8');
class Calculation
{
    public $a;
    public $b;
    public function __construct($c,$d)
    {
        $this->a=$c;
        $this->b=$d;
    }
    public function sum()
    {
        echo "Сумма чисел $this->a + $this->b = ";
        echo $this->a + $this->b;
    }
    public function del()
    {
//        try{
//            if ($this->a || $this->b == 0){
//                throw new Exception ('Деление на 0');      запутался, что то не понял
//            }
//            $c= $this->a/$this->b;
//        }catch (Exception $e){
//            echo $e->getMessage();
//            echo $this->a/$this->b;
//        }
        if (($this->b==0) || ($this->a == 0)){
            echo "Деление на 0";
        }else{
            echo "<br /> Деление чисел $this->a / $this->b = ";
            echo $this->a/$this->b;
        }
    }
    public function rasn()
    {
        echo "<br /> Разница чисел $this->a - $this->b = ";
        echo $this->a - $this->b;
    }
    public function umn()
    {
        echo "<br /> Умножение чисел $this->a * $this->b = ";
        echo $this->a* $this->b;
    }
}

$calc = new calculation(9,7);
$calc->sum();
$calc->del();
$calc->rasn();
$calc->umn();