<?php

	echo "\n============= FOR 1 =============\n";

	for($i = 0; $i <= 20; $i++){
		echo "Contador: $i\n";
	}

	
	echo "\n============= FOR 2 =============\n";

	for($j = 20; $j >= 0; $j--){
		echo "Contador: $j\n";
	}


	echo "\n============= FOR 3 =============\n";

	$times = ["Corinthians", "Santos", "Palmeiras", "Sao Paulo"];

	for($i = 0, $n = count($times); $i < $n; $i++){
		//echo $i+1 . " - $times[$i]\n";
		$string = sprintf("%d | %s", ($i+1), $times[$i]);

		echo "$string\n";
	}


	echo "\n============= FOR 4 =============\n";
	
	//FOR PARA ENCONTRAR TODOS OS CARACTERES
	$nome = "Luiz Fernando";

	for($i = 0, $n = strlen($nome); $i < $n; $i++){

		echo $nome[$i] . "\n";

	}


	// CONTINUE
	echo "\n============= FOR 5 =============\n";
	for ($i = 0; $i < 20; $i++){
		if($i == 3){
			continue;
		}
		echo "Contador: $i\n";
	}


	// BREAK
	for ($i = 0; $i < 20; $i++){
		if($i == 3){
			break;
		}
		echo "Contador: $i\n";
	}


	// NOVO CONTINUE
	echo "\n============= FOR 6 =============\n";
	for ($i = 1; $i <= 100; $i++){
		if($i % 2 == 0){
			continue;
		}
		echo "Contador: $i\n";
	}


	// NUMEROS PRIMOS
	echo "\n============= FOR 7 =============\n";
	for ($i = 1; $i <= 100; $i++){
		if($i % 1 == 0 && $i % $i == 0){
			continue;
		}
		echo "Contador: $i\n";
	}

