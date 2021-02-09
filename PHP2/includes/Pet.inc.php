<?php
//Visibility And Inheritance
// class Pet extends Person{
//     public function owner(){
//         $a = $this->first;
//         return $a;
//     }
// }

class Pet extends Person{
    private $petName;

    public function owner(){
        $a = $this->name;
        return $a;
    }

    public function setPetName($name){
        $this->petName = $name;
    }

    public function getPetName(){
        return $this->petName;
    }
}