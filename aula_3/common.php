<?php

//TDD - Test Driven Development (Desenvolvimento guiado por testes) 

function soma ($a, $b){

	$resultado = $a + $b;

	return $resultado;

}


function my_filter($lista, $func) {

	$nova_lista = array();

	foreach ($lista as $elemento) {
		if($func($elemento) == true){
			$nova_lista[] = $elemento;
		}	
	}

	return $nova_lista;

}