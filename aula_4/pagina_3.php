<?php

$skills_a = array("PHP", "Teste Driven Development", "Scrum");
$skills_b = "PHP, Teste Driven Development, Scrum"; 

echo "<h2>implode(glue, pieces)</h2>";
$values = implode($skills_a, ',');
var_dump($values);
echo "<hr>";

echo "<h2>explode(delimiter, string)</h2>";
$values = explode(',', $skills_b);
var_dump($values);
echo "<hr>";



//Prepared Statement - SQL seguro
$nome = "luiz";
$senha = "123";

$s = "INSERT (nome, senha) VALUES(%s, %s)";
$query = sprintf($s, $nome, $senha);

//mysql_query($query);
echo $query;