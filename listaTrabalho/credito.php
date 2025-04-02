<?php

	$saldoMedio = -2;

	if ($saldoMedio >= 0 && $saldoMedio <= 200) {
	
		echo "Saldo Médio: ", $saldoMedio;
		echo "<br>";
		echo "Nenhum crédito";
	
	}
	else if ($saldoMedio >= 201 && $saldoMedio <= 400) {
	
		$creditoUm = 0.20 * $saldoMedio;
	
		echo "Saldo Médio: ", $saldoMedio;
		echo "<br>";
		echo "Valor do crédito: ", $creditoUm;
	
	}
	else if ($saldoMedio >= 401 && $saldoMedio <= 600) {
	
		$creditoDois = 0.30 * $saldoMedio;
	
		echo "Saldo Médio: ", $saldoMedio;
		echo "<br>";
		echo "Valor do crédito: ", $creditoDois;
	
	}
	else if ($saldoMedio >= 601){
	
		$creditoTres = 0.40 * $saldoMedio;
	
		echo "Saldo Médio: ", $saldoMedio;
		echo "<br>";
		echo "Valor do crédito: ", $creditoTres;
		
	} else {
		
		echo "Valor inválido";
	
	}
	

?>