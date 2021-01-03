<?php

class Singleton {
    
    private static $instance = null;
    
    public static function getInstance(){
        if(Singleton::$instance == null){
            Singleton::$instance = new Singleton();
        }
        return Singleton::$instance;
    }
}

$objA = Singleton::getInstance();
$objB = Singleton::getInstance();

if($objA == $objB){
    echo "<br>Instância única";
}else{
    echo "<br>Instâncias difirentes";
}