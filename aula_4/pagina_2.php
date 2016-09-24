<?php

$keys = array('primeiro', 'segundo', 'terceiro');
$values = array('Hamilton', 'Rubinho', 'Alonso');

//Camel Case
echo "<h2>array_combine(array keys, array values)</h2>";
$new_array = array_combine($keys, $values);
var_dump($new_array);
echo "<hr>";

echo "<h2>array_count_values(array values)</h2>";
$values = array('Hamilton', 'Rubinho', 'Alonso', 'Hamilton');
$array = array_count_values($values);
var_dump($array);
echo "<hr>";

echo "<h2>array_diff(array1, array2)</h2>";
$array1 = array('um', 'tres', 'quatro', 'sete');
$array2 = array('um', 'tres', 'cinco', 'seis');
$new_array = array_diff($array1, $array2);
var_dump($new_array);
echo "<hr>";

echo "<h2>array_merge(array1, array2)</h2>";
$array1 = array("cor" => "azul", 1, 2, 6, 8);
$array2 = array("cor" => "rosa", 1, "a", "2", "6", 8, 10, 12);
$new_array = array_merge($array1, $array2);
var_dump($new_array);
echo "<hr>";

echo "<h2>array_sum(array)</h2>";
$resultados = array(1, 2, 3, 4, 5, 6, 7);
$new_array = array_sum($resultados);
var_dump($new_array);
echo "<hr>";