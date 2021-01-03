<?php

abstract class Abstracta{

    private $idade;

    public abstract function setNome($nome);
    public abstract function getNome();

    public function setIdade($idade){
        $this->idade = $idade;
    }
    public function getIdade(){
        return $this->idade;
    }
}

class ClasseAbstracta extends Abstracta{

    private $nome;
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }
    
}

$classeAbstrata = new ClasseAbstracta();
$classeAbstrata->setNome('PHP-8');
echo $classeAbstrata->getNome();
echo "<br>";
$classeAbstrata->setIdade(12);
echo $classeAbstrata->getIdade();

//$abstrata = new Abstracta();//Cannot instantiate abstract class Abstracta