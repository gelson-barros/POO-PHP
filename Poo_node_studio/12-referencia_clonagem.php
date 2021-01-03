<?php 
//Referência e Clonagem de objectos
//o metodo magico __clone ele é inicializado quando clonamos o objecto ou seja utilizamos a palavra chave clone

class Pessoa{
    public $idade;

    public function __clone(){
        echo "clonagem de objecto";
    }
}

$pessoa = new Pessoa();

$pessoa->idade = 25;

//objeto pessoa2 faz referencia da pessoa
$pessoa2 = $pessoa;
//clonagem
//$pessoa2 = clone $pessoa;
$pessoa2->idade = 35; 

echo $pessoa2->idade;