<?php

declare(strict_types=1);

include 'autoloader.inc.php';

$numOne = $_POST['num1'];
$numTwo = $_POST['num2'];
$operator = $_POST['operator'];

$calc = new Calc((int) $numOne, (int) $numTwo, (string) $operator);

$hasil = $calc->calculator();

?>


<input type="text" name="hasil" id="hasil" class="form-control" disabled value="<?= $hasil ?>">