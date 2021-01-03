<?php
abstract class AbstractFactory
{
    private $nome;
    private $rendaMensal;

    public function __construct($nome, $rendaMensal)
    {
        $this->setNome($nome);
        $this->setRendaMensal($rendaMensal);
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function setRendaMensal($rendaMensal)
    {
        $this->rendaMensal = $rendaMensal;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function getRendaMensal()
    {
        return $this->rendaMensal;
    }

    public abstract function analisarCredito(); //Boolean
    public abstract function getCategoria(); //String
}

class ClientePadrao extends AbstractFactory
{

    public function __construct($nome, $rendaMensal)
    {
        parent::__construct($nome, $rendaMensal);
    }

    #foi declarada no AbstractFactory
    public function analisarCredito()
    {
        return true;
    }

    #foi declarada no AbstractFactory
    public function getCategoria()
    {
        return "Cliente padrão";
    }
}

class ClienteRisco extends AbstractFactory
{

    public function __construct($nome, $rendaMensal)
    {
        parent::__construct($nome, $rendaMensal);
    }

    #foi declarada no AbstractFactory
    public function analisarCredito()
    {
        return false;
    }

    #foi declarada no AbstractFactory
    public function getCategoria()
    {
        return "Cliente com Risco";
    }
}

class ClienteSeguro extends AbstractFactory
{

    public function __construct($nome, $rendaMensal)
    {
        parent::__construct($nome, $rendaMensal);
    }

    #foi declarada no AbstractFactory
    public function analisarCredito()
    {
        return true;
    }

    #foi declarada no AbstractFactory
    public function getCategoria()
    {
        return "Cliente com alta credibilidade";
    }
}


class SingletonFactory
{
    private static $rendaMedia = 500;
    private static $rendaBaixa = 240;
    private static $instance = null;

    public static function getCliente($nome, $rendaMensal){
        if ($rendaMensal <= SingletonFactory::$rendaBaixa) {
            SingletonFactory::$instance = new ClienteRisco($nome, $rendaMensal);
        } elseif ($rendaMensal > SingletonFactory::$rendaBaixa and $rendaMensal <= SingletonFactory::$rendaMedia) {
            SingletonFactory::$instance = new ClientePadrao($nome, $rendaMensal);
        } else {
            SingletonFactory::$instance = new ClienteSeguro($nome, $rendaMensal);
        }

        $clienteAprovacao = "reprovado";
        if(SingletonFactory::$instance->analisarCredito()){
            $clienteAprovacao = "aprovado";
        }

        echo "<br>Cliente = ". SingletonFactory::$instance->getNome()."<br>";
        echo "<br>Categoria = " . SingletonFactory::$instance->getCategoria() . "<br>";
        echo "<br>Dinheiro = " . SingletonFactory::$instance->getRendaMensal() . "<br>";
        echo "<br>Crédito = " . $clienteAprovacao . "<br>";
        echo "<hr>";
    }
    
}

SingletonFactory::getCliente("Rodrigo", 459);
SingletonFactory::getCliente("João", 221);
SingletonFactory::getCliente("Antónia", 1234);