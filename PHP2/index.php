<?php

    include 'includes/Person.inc.php';
    include 'includes/Pet.inc.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    //Visibility And Inheritance
    // $pet01 = new Pet();
    // $person = new Person();

    // echo $pet01->owner();
    // echo $person->name();

    // Properties And Methods
    // $name = "alif";
    // $mata = "coklat";
    // $umur = "20";

    // $person = new Person();
    // $person->setName("lili");
    // echo $person->getName();

    $person = new Person();
    $pet = new Pet();

    $person->setName("alif");
    $pet->setName("rina");

    // echo $pet->owner();
    $pet->setPetName("dadun");
    echo $pet->getPetName();

?>

</body>
</html>