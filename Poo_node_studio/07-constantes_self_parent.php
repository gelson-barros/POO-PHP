<?php 
class Pessoa {
    const nome = "Rodrigo";

    public function exibirNome(){
        echo self::nome;
    }
}


class Rodrigo extends Pessoa {
    const nome = "Oliveira";

    public function exibirNome(){
        echo parent::nome;
    }
}

$pessoa = new Pessoa();
$pessoa->exibirNome();

$rodrigo = new Rodrigo();
$rodrigo->exibirNome();