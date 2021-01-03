<?php 

class OlaMundo {
    function __construct(){
        //echo "Olá Mundo do PHP-POO";
        return "Olá Mundo do PHP-POO";
    }
}
//->echo "Olá Mundo do PHP-POO";
//$ola = new OlaMundo();

//->return "Olá Mundo do PHP-POO";
$ola = new OlaMundo();
//echo $ola->__construct();
print $ola->__construct();

echo '<br><br><br>';
#classe Pessoa
class Pessoa{
    private $nome;

    #metodo setter
    public function setNome($nome){
        $this->nome = $nome;
    }

    #metodo getter
    public function getNome(){
        return $this->nome;
    }
}

$pessoa = new Pessoa();

$pessoa->setNome('Gelson Ferreira');
echo $pessoa->getNome();
echo '<br>';
$pessoa2 = new Pessoa();
$pessoa2->setNome('Ana Julia');
echo $pessoa2->getNome();

?>