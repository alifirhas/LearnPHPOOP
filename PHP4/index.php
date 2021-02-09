<?php
    declare(strict_types = 1);

    include 'includes/autoloader.inc.php';
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
        $person = new Person("alif", "coklat", 20);
        // echo Person::getNegara();

        // type declaration
        try{
            $person->setName("lina");
            echo $person->getName();
        } catch(TypeError $e){
            echo "Error!: ". $e->getMessage();
        }

    ?>
</body>
</html>