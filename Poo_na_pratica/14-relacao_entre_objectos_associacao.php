<?php 
//Associação 
//Acontece quando um objecto "utiliza" outro, porém, sem que eles depende um do outro.

class Pedido {
    public $numero;
    public $cliente;

}

class Cliente {
    public $nome;
    public $endereco;

}

$cliente = new Cliente();
$cliente->nome = "Gelson Ferreira";
$cliente->endereco = "Rua Barros, Número: 23";


$pedido = new Pedido();
$pedido->numero = "123";
$pedido->cliente = $cliente; 

$dados = array(
    'numero' => $pedido->numero,
    'nome_cliente' => $pedido->cliente->nome,
    'endereco_cliente' => $pedido->cliente->endereco
);
var_dump($dados);
var_dump($pedido);