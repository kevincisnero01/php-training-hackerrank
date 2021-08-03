<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio</title>
</head>
<body>
	<h1>Proporcion de numeros positivos, negativos y ceros</h1>
<?php

function plusMin($n, $arr){

	$countZeros = 0;
	$countPositive = 0;
	$countNegative = 0;

	for ($i=0; $i < $n; $i++) { 
		if($arr[$i] > 0) $countPositive++;
		if($arr[$i] < 0) $countNegative++;
		if($arr[$i] == 0) $countZeros++;
	}

	echo "<br>Existen <b>$countPositive</b> numeros positivos, <b>$countNegative</b> numeros negativos y <b>$countZeros</b> cero en la matriz<br><br>";
	echo number_format($countPositive/$n,6)."<br>";
	echo number_format($countNegative/$n,6)."<br>";
	echo number_format($countZeros/$n,6)."<br>";
}


$n = 6;
$arr = [-4,3,-9,0,4,1];

echo "<b>Matriz</b> = [";
for ($i=0; $i < count($arr); $i++) { 
	echo $arr[$i].", ";
}
echo "]<br>";

plusMin($n,$arr);

?>
</body>
</html>