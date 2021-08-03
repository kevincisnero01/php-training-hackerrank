<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio</title>
</head>
<body>
	<h1>Diferencia de las Diagonales de una Matriz</h1>
<?php

$ar_test = [
	[1,2,3],
	[4,5,6],
	[9,8,9]
];

function genrarArray($row,$col)
{
	$ar = array();
	for ($i=0; $i < $row; $i++) { 
		for ($j=0; $j < $col; $j++) { 
			$ar[$i][$j] = random_int(1,10);
		}
	}

	return $ar;
}

function printArray($ar0)
{
	for ($i=0; $i < count($ar0); $i++) { 
		echo"<br>";
		for ($j=0; $j < count($ar0); $j++) { 
			echo $ar0[$i][$j]." | ";
		}
	}
}

function diagonalDifference($ar, $row, $col)
{
	//INICIALIZE VALUES
	$diagonal1 = array();
	$sumDiagonal1 = 0;
	$diagonal2 = array(); 
	$sumDiagonal2 = 0;
	$result = 0;

	//SUM MAIN DIAGONAL 
	for ($i=0,$j=0; $i < $row & $j < $col; $i++,$j++) {
		$diagonal1[] = $ar[$i][$j];
		$sumDiagonal1 += $ar[$i][$j];
	}
	//SUM SECONDARY DIAGONAL 
	for ($i = ($row-1), $j = 0; $i >= 0 && $j < $col ; $i--,$j++) { 
		$diagonal2[] = $ar[$i][$j];
		$sumDiagonal2 += $ar[$i][$j];
	}
	//DIFFERENCIA DIAGONALS
	$result = $sumDiagonal1 - $sumDiagonal2;

	//PRINT RESULT
	echo "<br>La diagonal principal es = [";
	for ($i=0; $i < count($diagonal1); $i++) { 
		echo $diagonal1[$i].", ";
	}
	echo"]. = $sumDiagonal1";

	echo "<br>La diagonal segundaria es = [";
	for ($i=0; $i < count($diagonal2); $i++) { 
		echo $diagonal2[$i].", ";
	}
	echo"]. = $sumDiagonal2";

	echo "<br>La diferencia es [$sumDiagonal1 - $sumDiagonal2 ] = $result";
}

$row = 3;
$col = 3;
$ar1 = genrarArray($row,$col);
echo "<b>Matriz:</b> ";
echo printArray($ar1);
echo "<br><br>";
echo "<b>Resultado:</b> ";
echo diagonalDifference($ar1,$row,$col);

?>
</body>
</html>