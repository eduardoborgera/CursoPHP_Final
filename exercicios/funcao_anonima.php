<?php

// Exercício de Funções Anônimas

//Calcula Tempo
function calc_time($nome, $anonima){

    $inicio = microtime(true);
    
    echo $anonima($nome);
    
    $fim = microtime(true);

    $tempo = $fim - $inicio;
    
    return $tempo;

        
}
    

