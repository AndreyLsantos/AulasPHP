<!--JSON ENCODE => Transforma Array em Json
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

echo json_encode($pessoas);

?> -->


<!--JSON DECODE => Transforma Json em array  True =  Array, False = Obj
     <?php

$json = '[{"nome":"Andrey","Idade":25},{"nome":"Andressa","Idade":20}]';

$data = json_decode($json, true);

var_dump($data);

?> -->
