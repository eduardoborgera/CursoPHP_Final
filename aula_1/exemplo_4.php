<?php

	//Lacos de repeticao
	echo "==================== CHERNOBIL ===============\n"; 
	$num = 0;

	//while($num <= 100){
	while(($num += 10) <= 100){
		echo "\rApagando os arquivos do seu computador: $num";
		sleep(1);
		//$num += 10;
	}

	echo "\n:D\n";