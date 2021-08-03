<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio</title>
</head>
<body>
	<h1>Suma de elementos de una matriz</h1>
<?php

function simpleArraySum($ar){
	return array_sum($ar);
}

$ar = [1,2,3,4,10,11];
$result = simpleArraySum($ar);

echo"Matriz[";
foreach($ar as $key => $val)
{
	echo $key < (count($ar)-1) ? "$val, " : $val;
}
echo"] = $result";
?>
</body>
</html>