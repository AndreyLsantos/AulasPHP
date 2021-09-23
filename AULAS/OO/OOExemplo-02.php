<?php

    class Pessoa{

        private  $nome;
        private $sobrenome;
        private $idade;

        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getSobrenome(){
            return $this->sobrenome;
        }
        public function setSobrenome($sobrenome){
            $this->sobrenome = $sobrenome;
        }
        public function getIdade(){
            return $this->idade;
        }
        public function setIdade($idade){
            $this->idade = $idade;
        }

        public function nomeCompleto (){
            //Comeco Array Retornando os Gets
            return array (
                "Nome" => $this->getNome(),
                "Sobrenome" => $this->getSobrenome(),
                "Idade" => $this->getIdade()
            );
        }
    };
    $data = new Pessoa;   
    if(isset($_GET['submit'])){
        if(isset($_GET['nome'])){
            $data-> setNome($_GET['nome']);
        }else{
            echo "Campor Vazio";
        }
    
        if(isset($_GET['sobrenome'])){
            $data-> setSobrenome($_GET['sobrenome']);
        }else{
            echo "Campor Vazio";
        }
    
        if(isset($_GET['idade'])){
            $data-> setIdade($_GET['idade']);
        }else{
            echo "Campor Vazio";
        }
    
    }
   
    print_r($data->nomeCompleto());



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
    <form action="OOExemplo-02.php" method="GET">
        <input type="text" name="nome" placeholder="nome">
        <input type="text" name="sobrenome" placeholder="sobrenome">
        <input type="text" name="idade" placeholder="idade">
        <input type="submit" name="submit">
    </form>
</body>
</html>