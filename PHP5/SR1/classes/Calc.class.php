<?php

class Calc{
    private $numOne;
    private $numTwo;
    private $operator;

    public function __construct(int $numOne, int $numTwo, string $operator){
        $this->numOne = $numOne;
        $this->numTwo = $numTwo;
        $this->operator = $operator;
    }

    public function getData(){
        $data = "angka 1 adalah " . $this->numOne . "<br>";
        $data .= "angka 2 adalah" . $this->numTwo . "<br>";
        $data .= "operator adalah" . $this->operator . "<br>";
        return $data;
    }

    public function addition(int $numOne, int $numTwo){ return $numOne + $numTwo; }

    public function subtraction(int $numOne, int $numTwo){ return $numOne - $numTwo; }

    public function multiplication(int $numOne, int $numTwo){ return $numOne * $numTwo; }
    
    public function division(int $numOne, int $numTwo){ return $numOne / $numTwo; }

    public function calculator(){
        switch ($this->operator) {
            case "tambah":
                return $this->addition($this->numOne, $this->numTwo);
                break;
             case "kurang":
                return $this->subtraction($this->numOne, $this->numTwo);
                break;
             case "kali":
                return $this->multiplication($this->numOne, $this->numTwo);
                break;
             case "bagi":
                return $this->division($this->numOne, $this->numTwo);
                break;
            
            default:
                return "there is something wrong i can feel it";
                break;
        }
    }
    
}