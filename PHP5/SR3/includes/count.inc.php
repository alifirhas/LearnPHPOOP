<?php

declare (strict_types = 1);

include_once 'autoloader.inc.php';

// echo "helo ini count.inc.php";

$numOne = $_POST['num1'];
$numTwo = $_POST['num2'];
$operator = $_POST['operator'];

$calc = new Calc((int) $numOne, (int) $numTwo, $operator);

$hasil = $calc->calculator();

// echo $hasil;

?>

<input type="text" name="hasil" id="hasil" class="form-control" disabled value="<?=$hasil?>">
