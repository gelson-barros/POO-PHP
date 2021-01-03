<?php

class BusinessException extends Exception{
    public function __construct($msg){
        #vai para a função construtora do Exception
        parent::__construct($msg);
    }
}


class Excepcao {
    public function __construct($nome){
        try{
            if($nome == ""){
                throw new BusinessException("Nome não pode ser em branco.");
            }elseif(strlen($nome) < 5){
                throw new BusinessException("Nome precisa ter no minimo 5 letras.");
            }elseif(strtolower($nome) == $nome){
                throw new BusinessException("O nome não deve conter caracters maíusculas.");
            }else{
                throw new BusinessException("Paramétro inválido.");
            }
        }catch(BusinessException $businessException){
            echo $businessException->getMessage();
        }
        
    }
}

$excepcao = new Excepcao("gelson");
//echo strtolower("joão da silva");