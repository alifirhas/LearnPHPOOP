<?php
//Visibility And Inheritance
// class Person{
//     protected $first = "alif";
//     private $last = "irhas";
//     private $age = "20";

//     public function name(){
//         //$this referensi data yang ada dalam class
//         $a = $this->first;
//         return $a;
//     }
// }

// Properties And Methods
// class Person{
//     //properti dan method masuk sini

//     //properti : properti dalam class adalah variable dalam class
//     private $name;
//     private $mata;
//     private $umur;

//     //method : function dalam dalam class
//     public function setName($name){
//         $this->name = $name;
//     }

//     public function getName(){
//         return $this->name;
//     }

// }

class Person{

    protected $name;
    private $mata;
    private $umur;

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

}