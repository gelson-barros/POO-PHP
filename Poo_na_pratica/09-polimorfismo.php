<?php 
class Animal{
    public function andar(){
        echo "o animal andou";
    }

    public function correr(){
        echo "O animal correu";
    }
}

class Cavalo extends Animal{

    public function andar(){
        //echo "O cavalo andou";
        $this->correr();
    }
}

$animal = new Cavalo();
$animal->andar();