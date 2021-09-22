<!-- <?php

function sum($n1, $n2 = 5){
    return $n1 + $n2;
}

$n1 = sum(5);

echo "Soma de n1 e n2: $n1";

?> -->



<?php

function pessoa(){
    $argumentos = func_get_args();
    return $argumentos;
}

$pessoa1 = json_encode(pessoa("Andrey Luiz", 25));


echo "$pessoa1";



?>