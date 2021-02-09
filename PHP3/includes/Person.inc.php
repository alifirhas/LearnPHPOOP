<?php
//constructor and destructors
// class Person
// {

//     private $name;
//     private $mata;
//     private $umur;

//     //fungsi yang dijalankan terlebih dahulu saat class dipanggil
//     public function __construct($name, $mata, $umur)
//     {
//         $this->name = $name;
//         $this->mata = $mata;
//         $this->umur = $umur;
//     }

//     public function __destruct()
//     {
//         echo "<p>objek ditutup";
//     }

//     public function setName($name)
//     {
//         $this->name = $name;
//     }

//     public function getName()
//     {
//         return $this->name;
//     }

// }

//static properties and method
class Person
{

    private $name;
    private $mata;
    private $umur;

    public static $negara = "indonesia";

    //fungsi yang dijalankan terlebih dahulu saat class dipanggil
    public function __construct($name, $mata, $umur)
    {
        $this->name = $name;
        $this->mata = $mata;
        $this->umur = $umur;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public static function setNegara($negara){
        //cara untuk refernsi properties static
        self::$negara = $negara;
    }
    public function getNegara(){
        return self::$negara;
    }
}
