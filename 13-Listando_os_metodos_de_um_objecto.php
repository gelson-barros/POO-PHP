<?php


class OlaMundo2{
    
    // constructor
    function __construct()
    {
        
    }

    // method 1

    function funcao1(){

        return (true);
    }

    // method 2

    function funcao2(){

        return (true);
    }

    // method 3

    private function funcao3()
    {

        return (true);
    }

    // method 4

    protected function funcao4()
    {

        return (true);
    }
}



$meus_objetos = new OlaMundo2();

$metodos_classe = get_class_methods(get_class($meus_objetos));
echo "<pre>";
print_r($metodos_classe);
echo "</pre>";


foreach ($metodos_classe as $nome_metodo) {

    echo "$nome_metodo<br>";
}
?>