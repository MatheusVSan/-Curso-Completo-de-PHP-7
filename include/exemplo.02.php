<?php

/*INCLUDE serve pra chamar pastas e funciona mesmo com falhas ou erros 
o REQUIRE estaciona e dificulta a procura do "erro"*/

//include "exemplo.01.php";
/*REQUIRE ou REQUIRE_ONCE para solicitar uma vez*/
require_once "inc/exemplo.01.php";

$resultado = somar(10, 20);

echo $resultado;


?>