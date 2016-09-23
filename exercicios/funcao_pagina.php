<?php require "funcao_anonima.php" ?>

<html>
<head>
	<title>Pagina Funcao Anonima</title>
</head>
<body>
<?php 

    $nome = "Luiz Fernando";

    $anonima = function($n){
        
        return ("Ola, $n <br><br>");

    };    
    
    
    $tempo_funcao = calc_time($nome, $anonima);

    echo "Tempo de execucao em segundos: $tempo_funcao";
   
?>
</body>
</html>