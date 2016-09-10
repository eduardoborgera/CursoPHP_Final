<?php

	echo "Opcao: ";
	$opt = readLine();

	switch($opt){

		case 1:
			echo "Cadastrar usuarios...\n";
			break;

		case 2:
			echo "Listar usuarios...\n";
			break;

		case 3:
			echo "Deletar usuarios...\n";
			break;

		default:
		echo "Opcao nao valida!\n";
	}