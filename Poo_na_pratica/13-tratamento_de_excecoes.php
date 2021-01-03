<?php 
// Ocorrência anormal que afecta o funcionamento da aplicação
// Exception é a classe base para todas Exceptions
// message, code, file, line

class Newsletter {
    public function cadastrarEmail($email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        throw new Exception("Este email é inválido", 121/*1 */);
        }else{
            echo "Email cadastrado com sucesso!";
        }
    }
}

$newsletter = new Newsletter();
try{
    $newsletter->cadastrarEmail('contacto@');
}catch(Exception $e){
    //echo $e->getMessage();
    echo "Mensagem: ".$e->getMessage()."<br>";
    echo "Código: ".$e->getCode()."<br>";
    echo "Linha: ".$e->getLine()."<br>";
    echo "Arquivo: ".$e->getFile()."<br>";
    
}
