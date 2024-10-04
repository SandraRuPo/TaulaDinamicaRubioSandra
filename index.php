<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Exemple Hola Món en PHP</title>
</head>
<body>
    <?php

	/* 1. Dissenyeu un script que a partir d'un array de 10 posicions amb nombres entre el 0 i l'1 a
	cadascuna, en mostri la mitjana, el nombre més petit i el nombre més gran.*/
	
		$array;
		for ($i = 0; $i < 10; $i++)
		{
			$array[$i] = rand(0, 10)/10;
		}
		print_r($array);
		$total = 0;
		$min = 1.1;
		$max = 0.0;
		foreach ($array as $value)
		{
			$total += $value;
			if ($value < $min)
			{
				$min = $value;
			}
			if ($value > $max)
			{
				$max = $value;
			}
		}
		$mitja = $total/(count($array));
		//echo max($array);
		//echo array_sum($array);
		echo "<br> La mitja es: " . $mitja;
		echo "<br> El màxim es: " . $max . " i el mínim es: " . $min;

		//$numero = "10.51321235";
		//echo number_format((float)$numero, 2, '.', '');
    ?>
</body>
</html>