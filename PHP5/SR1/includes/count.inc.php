<?php

declare(strict_types=1);

include "autoloader.inc.php";

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operator = $_POST['operator'];


$calc = new Calc((int)$num1, (int)$num2, (string)$operator);

$hasil = $calc->calculator();

?>
<input type="text" class="form-control" disabled value="<?= $hasil?>">