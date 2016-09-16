<?php

    echo "Escolha uma Opção:\n";  
    
    echo "  1 - Somar\n";
    echo "  2 - Subtrair\n";
    echo "  3 - Multiplicar\n";
    echo "  4 - Dividir:\n";
    
    $opcao = readLine();    
    
    echo "\nEscolha o primeiro valor: ";
    
    $num1 = readLine();
    
    echo "\nEscolha o segundo valor: "; 
    
    $num2 = readLine();


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
            echo "Por favor, digite uma opção válida!\n";
    }
    
    echo "\nO resultado é: $result";
    