<?php

    include 'includes/Person.inc.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        //constructor and destructors

        // $person = new Person("alif", "coklat", 20);
        // $name = $person->getName();
        // echo $name;
    
        //static properties and method
        $person = new Person("alif", "coklat", 20);

        //cara untuk memanggil method dan properties static
        // Person::setNegara("singapura");
        echo Person::getNegara();

    ?>
</body>
</html>