<?php 

$string = "Luiz Fernando";

echo "<h2>strtoupper($string)</h2>";
echo strtoupper($string);
echo "<hr>";

echo "<h2>strtolower($string)</h2>";
echo strtolower($string);
echo "<hr>";

echo "<h2>ucfirst($string)</h2>";
echo ucfirst($string);
echo "<hr>";

echo "<h2>str_repeat(string, multiplicador)</h2>";
echo str_repeat("#", 10);
echo "<hr>";

echo "<h2>str_replace(search, novo_valor, valor)</h2>";
echo str_replace("Oi", "Tchau", "Oi Mundo");
echo "<hr>";

echo "<h2>substr(string, posicao)</h2>";
echo "Original: $string <br>";
echo "Substr: " . substr("ABCDEFGHIJ", 3,6);
echo "<hr>";

echo "<h2>strpos(valor, pesquisa)</h2>";
echo strpos("0123456789", "7") . "<br>";
echo strpos("0123456789", "9") . "<br>";
echo strpos("0123456789", "A") . "<br>"; //NULL
echo "<hr>";

echo "<h2>strstr(valor, pesquisa)</h2>";
echo strstr("meu.nome@4linuxmelhor.com.br", "@");
echo "<hr>";

echo "<h2>trim(string)</h2>";
$s = "            SEJA BEM VINDO           ";
var_dump($s);
echo var_dump(trim($s));
echo "<hr>";