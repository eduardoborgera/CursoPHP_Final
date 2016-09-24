<?php


$v = 5;
$resultado_final = null;

for($i = $v; $i >= 1; $i--){
	$resultado_final += $v * $v-1; 
}

echo $resultado_final;