<?php 

/*
	--Funcao
		function <nome da funcao>(param1, param2,...){
			
			//CODIGO

			//RETORNO

		}

	--Exemplo

	function prime($max){

		$resultado = 0;

		for($i = 0; $i < $max; $i++){
			$a = $i + 1;
		}

		return $resultado;

	}

	$entrada_do = readline();
	$a = prime($entrada_do);

	*/

	// Calcular a quantidade de numeros primos

	/** 
	 * Funcao para calcular valores primos
	 * ate o ultimo valor que e passado por
	 * parametro desta funcao.
	 */

	function primos($ultimo_valor){
		for ($i = 2;   $i <= $ultimo_valor; $i++){
			//echo "Valor: $i\n";
			$counter = 0;
			//echo "Validando: ";
			for($j = 1; $j <= $i; $j++){
				//echo "$j ";
				if($i % $j == 0){
					$counter += 1;
				}
			}
			//echo "\n";
			//if($counter == 2){
			//	echo "Primo: $i\n";
			//}
		}
	}

	primos(10000);