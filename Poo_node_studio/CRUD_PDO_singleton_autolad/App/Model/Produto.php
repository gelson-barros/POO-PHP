<?php 
namespace App\Model;
class Produto{

    private $id, $nome, $descricao;

    public function __get($nome){
        return $this->$nome;
    }

    public function __set($nome, $valor){
        $this->$nome = $valor;
    }

}

?>