<?php

class ClasseClonando{
    
    public $varClone;
    public function __construct(){
        $this->varClone = "<br>PHP-7<br>";
    } 

    public function __clone(){
        $this->varClone = "PHP-7 Clone<br>";
    }
}

$classClonando = new ClasseClonando();
$cloneClassClonando = clone $classClonando;
echo $classClonando->varClone."<br>". $cloneClassClonando->varClone;
