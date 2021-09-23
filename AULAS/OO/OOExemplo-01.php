<?php

    class Pessoa{
        public $nome;
        function falar(){
            return "Seu nome é: ".$this->nome;
        }
    };
    
    if(!isset($_POST['nome']) || $_POST['nome'] == '' ){
        echo "Alerta!!! </br> Digite seu nome corretamente.";
    }else{
        $pessoa = new Pessoa;
        $pessoa -> nome = $_POST['nome'];
        echo $pessoa -> falar();
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="OOExemplo-01.php" method="post">
        <input type="text" name="nome">
        <input type="submit">
    </form>

</body>

</html>