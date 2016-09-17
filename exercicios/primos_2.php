<?php

// Funcao Primos Otimizada e Esteticamente melhor

function e_primo($numero){
	if($numero % 2 == 0 && $numero != 2){
		return false;
	}

	$counter = 0;
	for($j = 1; $j <= $numero; $j++){
		if($numero % $j == 0){
			$counter += 1;
		}

		if($counter > 2){return false;}	
	}

	return $counter == 2;

}


function primos($ultimo_valor){
	for ($i = 2;   $i <= $ultimo_valor; $i++){
		if(e_primo($i)){
			//echo "Primo: $i\n";
		}
			
	}

}


primos(10000);