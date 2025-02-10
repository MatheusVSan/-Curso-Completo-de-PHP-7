<?php

$pessoas = array();

array_push($pessoas, array(
    'nome'=>'João',
    'idade'=> 20,
));
array_push($pessoas, array(
    'nome'=>'Glaucio',
    'idade'=> 25,
));
/*JSON_ENCODE tranforma array em JSON */

echo json_encode($pessoas);

?>