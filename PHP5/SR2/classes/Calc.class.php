<?php

class Calc
{
    public $numOne;
    public $numTwo;
    public $operator;

    public function __construct(int $numOne, int $numTwo, string $operator)
    {
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

    public function add(int $numOne, int $numTwo)
    {return $numOne + $numTwo;}
    public function sub(int $numOne, int $numTwo)
    {return $numOne - $numTwo;}
    public function mult(int $numOne, int $numTwo)
    {return $numOne * $numTwo;}
    public function div(int $numOne, int $numTwo)
    {return $numOne / $numTwo;}

    public function calculator()
    {
        switch ($this->operator) {
            case "tambah":
                return $this->add((int) $this->numOne, (int) $this->numTwo);
                break;
            case "kurang":
                return $this->sub((int) $this->numOne, (int) $this->numTwo);
                break;
            case "kali":
                return $this->mult((int) $this->numOne, (int) $this->numTwo);
                break;
            case "bagi":
                return $this->div((int) $this->numOne, (int) $this->numTwo);
                break;
            default:
                return "there is something wrong i can't feel it";
                break;
        }
    }

}
