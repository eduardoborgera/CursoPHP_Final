<?php

function _merge($chaves, $valores){
	// TODO: Utilizando For retornar um array associativo
	//		 com as chaves e valores

	// Funcao Pronta
	// array_merge($c, $v);

	$resultado = array();

	for($i = 0, $n = count($chaves); $i < $n; $i++){

		$chave  = $chaves[$i];
		$valor  = $valores[$i];

		$resultado[$chave] = $valor;

	}

	return $resultado;

}

$c = array('Luiz', 'Fernando', 'Reis', 'Silva');
$v = array('maca', 'banana', 'pera', 'morango');

$resultado = _merge($c, $v);
