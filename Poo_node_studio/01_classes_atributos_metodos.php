<?php 


class Pessoa{
    public $nome;
    public $idade;

    public function falar(){
        echo "{$this->nome} de {$this->idade}  acabou de falar<br>";
    }
}

$pessoa1 = new Pessoa();
var_dump($pessoa1);
$pessoa1->nome = "Gelson de Barros Ferreira";
$pessoa1->idade = 31;
$pessoa1->falar();
var_dump($pessoa1);


