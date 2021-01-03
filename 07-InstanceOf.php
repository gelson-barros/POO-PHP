<?php
#Testar se classe é instância de outra
class TesteInstanceOf{
    
    //....
}

class ClasseInstanceOf{


    public function __construct($obj){
        
        if($obj instanceof TesteInstanceOf){
            echo "Objecto da class(TesteInstanceOf)<br>";
        }else{
            echo "Não é um Objecto da class(TesteInstanceOf)<br>";
        }
    }
}

$testeInstanceOf = new TesteInstanceOf();
$classeInstanceOf = new ClasseInstanceOf($testeInstanceOf);