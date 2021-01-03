<?php
// Listando as variáveis de uma classe



class Variaveis
{



    var $variavel1; // esta não tem valor default...

    var $variavel2 = "xyz";

    var $variavel3 = 100;



    // construtor

    function Variaveis()
    {

        // mudar algumas propriedades

        $this->var1 = "foo";

        $this->var2 = "bar";

        return true;
    }
}



$minha_classe = new Variaveis();
echo get_class($minha_classe);
$variaveis = get_class_vars(get_class($minha_classe));
echo "<pre>";
print_r($variaveis);
echo "</pre>";


foreach ($variaveis as $nome => $value) {

    echo "$nome = $value<br>";
}