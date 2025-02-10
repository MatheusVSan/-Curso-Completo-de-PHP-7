<?php 

$condicao = true;

while ($condicao)  

    $numero = rand(1, 10);
    
    print ($numero) . " " ;

    if ($numero === 3) {

        echo "TRÊS!!!";
        $condicao = false;

}

?>