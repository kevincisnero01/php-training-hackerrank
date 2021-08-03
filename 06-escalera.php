<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio</title>
</head>
<body>
	<h1>Escalera</h1>
<?php

function escalera($n){
	$row = $n;
	$col = $n;
	$total = $n*$n;
	$spa = "&nbsp;&nbsp;";

	for ($row=1; $row <= $n; $row++) { 
		for ($col=1; $col <= $n ; $col++) {
			if($row == 1 && $col < 6) echo $spa; elseif($row == 1 && $col == 6) echo "#";
			if($row == 2 && $col < 5) echo $spa; elseif($row == 2 && $col >= 5) echo "#";
			if($row == 3 && $col < 4) echo $spa; elseif($row == 3 && $col >= 4) echo "#";
			if($row == 4 && $col < 3) echo $spa; elseif($row == 4 && $col >= 3) echo "#";
			if($row == 5 && $col < 2) echo $spa; elseif($row == 5 && $col >= 2) echo "#";
			if($row == 6 && $col >= 1) echo "#";			
		}
		echo "<br>";
	}
}

$n = 6;
echo "<b>Escalera</b> = $n <br>";
escalera($n);

?>
</body>
</html>