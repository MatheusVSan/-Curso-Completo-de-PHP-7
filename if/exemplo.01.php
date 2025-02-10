<?php

$qualASuaIdade = 66;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;


/* Aprendendo a usar IF, ELSE IF E ELSE*/

if ($qualASuaIdade < $idadeCrianca) {

    echo "Criança";

} else if  ($qualASuaIdade < $idadeMaior) {  
    
    echo "Adolecente";
    
} else if  ($qualASuaIdade < $idadeMelhor) {  
    
    echo "Adulto";
    
} else {  
    
    echo "Idoso";
    
}

echo "<br>";

/* Aprendendo operador TERNARIO "? = IF"  ": ELSE" */

echo ($qualASuaIdade < $idadeMaior) ? "Menor de idade": "Maior de Idade";
 
?>