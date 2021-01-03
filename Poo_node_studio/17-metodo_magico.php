<?php 
//Método Mágico
//clone*
//construct*
//invoke*
//tostring*
//get*
//set*

class Pessoa{
    private $dados = array();

    public function __set($nome, $valor){
        $this->dados[$nome] = $valor;
    }

    public function __get($nome){
        return $this->dados[$nome];       
    }
    public function __toString(){//quando tentas imprimir o bjecto desta class
        return "Tentei imprimir o objecto";
    }

    public function __invoke(){
        return "objecto como função";
    }
}

$pessoa = new Pessoa();
$pessoa->nome = "Gelson";
$pessoa->idade = 50;
$pessoa->sexo = "M";
//echo $pessoa->nome."<br>";
//echo $pessoa->idade . "<br>";
//echo $pessoa->sexo . "<br>";
//var_dump($pessoa);

//echo $pessoa;//->quando tentas imprimir o obejcto e te retorna codigo que esta  __tostring

echo $pessoa();//->quando tentas imprimir o obejcto como funcao e te retorna codigo que esta __invoke