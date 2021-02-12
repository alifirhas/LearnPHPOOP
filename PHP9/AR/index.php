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
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	helo
	<p></p>
	<?php

		$test = new Test();

		$test->getUserSTMT("a");

	?>

</body>
</html>