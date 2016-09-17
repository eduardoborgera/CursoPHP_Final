<?php

    echo "..:: CALCULADORA ::..\n";  
    
    echo "  1 - Somar\n";
    echo "  2 - Subtrair\n";
    echo "  3 - Multiplicar\n";
    echo "  4 - Dividir:\n";
    
    $opcao = readLine('Escolha uma Opção: ');    
    
    $num1 = readLine('Escolha o primeiro valor: ');

    $num2 = readLine('Escolha o segundo valor: ');


    switch($opcao){

            case 1:                    
                    $result = $num1 + $num2;
                    break;

            case 2:
                    $result = $num1 - $num2;
                    break;

            case 3:
                    $result = $num1 * $num2;
                    break;
                
            case 4:
                    $result = $num1 / $num2;
                    break;

            default:
            echo "Por favor, digite uma opção válida!";
    }
    
    echo "O resultado é: $result\n";
    