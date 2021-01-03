<?php
class Estatica{
    static $varStatic = "Variável Estática<br>";

    static function getStatic(){
        return Estatica::$varStatic;
    }
}

echo Estatica::getStatic();
?>