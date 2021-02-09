<?php

//Scope resolution
class Second extends First{
    public static $statisticProperty = "Properti static";

    public static function anotherTest(){
        echo parent::EXAMPLE;
        echo "<br>";
        echo self::$statisticProperty;
    }
}