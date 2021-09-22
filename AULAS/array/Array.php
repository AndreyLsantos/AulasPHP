 <!-- Array  

 <?php
$frutas = array('Laranja', 'Abacaxi', 'Melancia');
print_r($frutas);
?> -->





<!-- Array Bidimensional

 <?php
$carros[0][0] = "GM" ;
$carros[0][1] = "Cobalt" ;
$carros[0][2] = "Onix" ;
$carros[0][3] = "Camaro" ;

$carros[1][0] = "Ford" ;
$carros[1][1] = "Fiest" ;
$carros[1][2] = "Fusion" ;
$carros[1][3] = "Eco Sport" ;

echo $carros[0][3];
echo end($carros[1]);
?> -->




<!-- Array Bidimensional array_push

<?php

$pessoas = array();

array_push($pessoas, array(
    "nome"=>'Andrey',
    "Idade"=> 25,
));

array_push($pessoas, array(
    "nome"=>'Andressa',
    "Idade"=> 20,
));

print_r($pessoas[0]['nome']);

?> -->