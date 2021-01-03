<?php 
/* Herança é um recurso que permite que class compartilhem atributos e métodos, afim de reaproveitar códigos ou comportamentos*/
class Veiculo{

    public $modelo;
    public $cor;
    public $ano;

    public function andar(){
        echo "Andou";
    }

    public function parar(){
        echo "Parou";
    }
}


class Carro extends Veiculo {

    public function ligarLimpador(){
        echo "limpando o para-briza";
    }
}


class Mota extends Veiculo{
    public function darGrau(){
        echo "dando grau";
    }
}

$carro = new Carro();
$carro->cor = "Vermelha";
$carro->modelo = "Gol";
$carro->ano = 2019;
$carro->andar();
echo "<br>";
$carro->ligarLimpador();
var_dump($carro);

$moto = new Mota();
$moto->cor = "Cinzenta";
$moto->modelo = "Honda Biz";
$moto->ano = 2017;
$moto->parar();
echo "<br>";
$moto->darGrau();
var_dump($moto);


