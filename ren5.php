<?php
class Math {
public $number1;
public $number2;
    public function add() {  
    return $this->number1 + $this->number2; 
    } 
    public function minus() { 
    return $this->number1 - $this->number2;   
    }
    }
$math = new Math;
$math->number1 = 7;$math->number2 = 5;
$result1 = $math->add();$result2 = $math->minus();
echo "足し算の結果は{$result1}、引き算の結果は{$result2}です。";
?>
