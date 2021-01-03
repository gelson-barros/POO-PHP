<?php

namespace App\Model;
use App\Model\Conexao;

class ProdutoDao{

    public function create(Produto $produto){
               
        $query = "insert into produtos(nome, descricao)values(:nome, :descricao)";
        $stmt = Conexao::getConn()->prepare($query);
        
        $stmt->bindValue(':nome', $produto->__get('nome'));
        $stmt->bindValue(':descricao', $produto->__get('descricao'));

        $stmt->execute();
        
    }

    public function read(){
        $query = "SELECT * FROM produtos";
        $stmt = Conexao::getConn()->prepare($query);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return [];
        }
    }

    public function update(Produto $produto){
        
        $query = "update produtos set nome = :nome, descricao = :descricao where id = :id";

        $stmt = Conexao::getConn()->prepare($query);

        $stmt->bindValue(':id', $produto->__get('id'));
        $stmt->bindValue(':nome', $produto->__get('nome'));
        $stmt->bindValue(':descricao', $produto->__get('descricao'));

        $stmt->execute();
    }

    public function delete($id){
        $query = "delete from produtos where id = :id";

        $stmt = Conexao::getConn()->prepare($query);

        $stmt->bindValue(':id', $id);

        $stmt->execute();
    }
}