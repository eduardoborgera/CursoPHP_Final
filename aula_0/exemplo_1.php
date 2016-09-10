<?php

	//TODO: Colocar a conexao do banco AQUI

	$string = "String";
	$inteiro = 10;
	$float = 10.2;
	
	$sub_array = ["Azul", "Amarelo", "Rosa"];
	$array = [$sub_array, 5, 15];

	$array2 = [["Azul", "Amarelo", "Rosa"] . 5, 15];

	var_dump($string);
	var_dump($array);

	echo $array[1]."\n";