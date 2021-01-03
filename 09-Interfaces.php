<?php

interface IPessoa{
    public function setNome($nome);
    public function getNome();
}

interface IPessoaFisica{
    public function setCpf($cpf);
    public function getCpf();
}

interface IPessoaJuridica{
    public function setCnpj($cnpj);
    public function getCnpj();
}

class ClassePessoa implements IPessoa, IPessoaFisica, IPessoaJuridica
{
    function __construct($nome, $cpf, $cnpj)
    {
        $this->setNome($nome);
        $this->setCpf($cpf);
        $this->setCnpj($cnpj);
    }

    /* Métodos Set */
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setCpf($cpf){
        $this->cpf = $cpf;
    }
    public function setCnpj($cnpj){
        $this->cnpj = $cnpj;
    }
    /* Métodos Get */
    public function getNome(){
        return $this->nome;
    }
    public function getCpf(){
        return $this->cpf;
    }
    public function getCnpj(){
        return $this->cnpj;
    }
    function __destruct()
    {
        echo $this->getNome() . "<br>" . $this->getCpf() . "<br>" . $this->getCnpj();
    }
}
$classePessoa = new ClassePessoa("Rodrigo", "324.541.588-98", "6545.2101/0001");
