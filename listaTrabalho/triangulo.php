<?php

	$ladoA = 6;
	$ladoB = 7;
	$ladoC = 3;
	
	$somaAB = $ladoA + $ladoB;
	$somaAC = $ladoA + $ladoC;
	$somaBC = $ladoB + $ladoC;
	
	if ($somaAB > $ladoC || $somaAC > $ladoB || $somaBC > $ladoA) {
	
		echo "Foi possível formar um triângulo";
		echo "<br><br>";
		
		if ($ladoA == $ladoB && $ladoB == $ladoC) {
		
			echo "Tipo de triângulo: Equilátero - Três lados iguais";
		
		} else if ($ladoA != $ladoB && $ladoB != $ladoC && $ladoA != $ladoC) {
		
			echo "Tipo de triângulo: Escaleno - Três lados diferentes";
		
		} else {
		
			echo "Tipo de triângulo: Isósceles - Dois lados iguais e um diferentes";
		
		}
		
	
	} else {
	
		echo "Não é possível formar um triângulo";
	
	}














?>