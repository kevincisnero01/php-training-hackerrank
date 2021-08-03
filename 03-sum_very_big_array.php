<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio</title>
</head>
<body>
	<h1>Grandes Sumas de Matrices</h1>
<?php

function sumBig($ar){
	$sum = 0;
	for ($i=0; $i < count($ar); $i++) { 
		$sum += $ar[$i];
	}
	return $sum;
}
//int(2147483647) //Desbordamiento en x86 (10 dig)
//int(9223372036854775807) //Desbordamiento en x64   (20 dig)
$ar = [1000000001, 1000000002,1000000003,1000000004,2147483647];
$result = sumBig($ar);
echo"Suma = $result";

/*
Conversión a números enteros ¶
-Para convertir explícitamente un valor al tipo integer se puede emplear tanto (int) como (integer)
-Sin embargo, la mayoría de las veces la conversión no es necesaria, ya que un valor es convertido de forma automática cuando un operador, función o estructura de control requiera un argumento de tipo integer
-Un valor también puede ser convertido al tipo integer mediante la función intval().
*/
?>
</body>
</html>