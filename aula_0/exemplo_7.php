<?php
	
	$n1 = 7;  // Igual (tranforma para tipagens iguais e verifica valor)
	$n2 = 10;  // Diferente ou <>
	$n3 = 19; // Identico (verifica valor e tipagem)
	$n4 = 30; // Nao Identico


	$a = $n1 > 5 && $n2 > 5;
	$b = $n1 > 5 || $n2 < 5;
	$c = $n3 < 15 and $n4 != 5;
	$d = $n3 < 15 or $n4 != 5;


	var_dump($a);
	var_dump($b);
	var_dump($c);
	var_dump($d);
