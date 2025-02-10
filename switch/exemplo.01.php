<?php

$diaDaSemana = date("w");


/*Dirençado IF e do CASE é que a do if é aleatorio e o do case sei oque vai acontecer*/

switch ($diaDaSemana){

    case 0:
        echo"domingo";
        break;
    case 1:
        echo"Segunda-feira";
        break;
    case 2:
        echo"Terça-feira";
        break;
    case 3:
        echo"Quarta-feira";
        break;
    case 4:
        echo"Quinta-feira";
        break;
    case 5:
        echo"Sexta-feira";
        break;
    case 6:
        echo"Sabado";
        break;
    
    /*Mostra se der erro e mostra o padrao*/    
    default;
    echo "Data invaçida!";
    break;

}


?>