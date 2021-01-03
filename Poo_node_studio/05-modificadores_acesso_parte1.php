<?php 

/*
public - fará com que não haja ocultação nehuma, toda propriedade ou método declarado com public serão acessiveis por todos que quiserem acessa-los

protected - visibilidade protected faz com que todos os herdeiros vejam as propriedades ou metodos protegidos como se fossem públicos

private - ao contrario do public, esse modificador faz com que qulaquer método ou propriedade seja visiviel só e somente pela classe que declarou e dentro.

*/
class Veiculo{

    //private $modelo;
    public $modelo;
    public $cor;
    public $ano;

    //protected function andar(){
    //    echo "Andou";
    //}
    
    public function andar(){
        echo "Andou";
    }
    
    public function parar(){
        echo "Parou";
    }
    /*
    public function setModelo($m){
        $this->modelo = $m;
    }

    public function getModelo(){
        return $this->modelo;
    }
    */
    
}


class Carro extends Veiculo {

    /*
    public function setModelo($m){
        $this->modelo = $m;
    }

    public function getModelo(){
        return $this->modelo;
    }
    */
    public function ligarLimpador(){
        echo "limpando o para-briza";
    }
}


class Mota extends Veiculo{
    public function darGrau(){
        echo "dando grau";
    }
}

$veiculo = new Veiculo();
//$veiculo->setModelo("Hilux");
//echo $veiculo->getModelo();
//var_dump($veiculo);
$veiculo->andar();


