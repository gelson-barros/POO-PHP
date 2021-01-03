<?php 
//Composição 
//Uma classe cria a instância de outra classe dentro de si próprio, sendo assim, quando ela for destruída, a outra classe também será.

class Pessoa{
    public function atribuiNome($nome){
        return "O nome da pessoa é ".$nome;
    }
}
class Exibe{
    public $pessoa;
    public $nome;

    public function __construct($nome){
        $this->pessoa = new Pessoa();
        $this->nome = $nome;
        $this->exibeNome();
    }

    public function exibeNome(){
        echo $this->pessoa->atribuiNome($this->nome);
    }
}

$exibe = new Exibe('Jose');