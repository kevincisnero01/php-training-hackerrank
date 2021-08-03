<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio</title>
</head>
<body>
	<h1>Suma de 2 numeros</h1>
<?php

function sum($a,$b){
	return $a+$b;
}

$_a = 5;
$_b = 8;
$result = sum($_a,$_b);
echo"Suma entre[$_a y $_b] = $result";
?>
</body>
</html>