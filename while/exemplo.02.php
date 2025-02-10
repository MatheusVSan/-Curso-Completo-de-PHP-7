<?php

$total = 100;
$desconto = 0.9;
/*Aprendendo a dar descontos!!*/
do {
    $total *= $desconto;
    
} while ($total > 100);

echo $total;
 
    
?>