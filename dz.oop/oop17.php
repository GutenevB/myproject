<?php
/**
17. Сделайте класс, который принимает массив, а возвращает html-таблицу. Класс
также должен принимать количество столбцов в этой таблице и сам разбивать
массив нужным образом.
 */
header('Content-type:text/html; charset=utf-8');
class TableArray
{
    public $user=[];
    public $countPassage;
    public $count;

    public function __construct($cP,$c)
    {
        $this->countPassage=$cP;
        $this->count=$c;
    }
    public function SetArray($key,$value)
    {
        $value = explode(":",$value);
        $this->user[$key]=$value;
    }
    public function GetTable()
    {
        foreach ($this->user as $k=>$v) {
            if($this->count>count($v)){
                echo "Много колонок! Измените второе значение.";
                exit;
            }else {
                echo "<table border='3'  >";
                echo "<tr>";
                echo "<td>" . $k . "</td>";
                    for ($i = 0; $i < $this->count; $i++) {
                        echo "<td>" . $v[$i] . "</td>";
                    }
                echo "</tr>";
                echo "</table>";

            }
        }
    }
}
$tab=new TableArray(3,5);
$tab->SetArray('a','Bogdan:Gutenev:0637363912');
$tab->SetArray('b','Bogdan:Gutenev:0637363912');
$tab->SetArray('c','Bogdan:Gutenev:0637363912');

//print_r($tab->user);
echo $tab->GetTable();