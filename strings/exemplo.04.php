<?php

$frase = "A repetição é mãe da retenção.";

$palavra = "mãe";

/*Encontra a posição da primeira ocorrência de uma substring em uma string*/

$q = strpos($frase,$palavra);

/*Verifica se uma string termina com uma substring fornecida*/

$texto = substr($frase, 0, $q);

var_dump($texto);

/*"STRLEN" Retorna o tamanho de uma string*/
$texto2 = substr($frase, $q + strlen($palavra));


echo "<br>";

var_dump($texto2);


?>