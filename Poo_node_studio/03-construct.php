<?php 


class Login{
    private $email;
    private $senha;
    private $nome;

    public function __construct($email, $senha, $nome){
        $this->setEmail($email);
        $this->setSenha($senha);
        $this->setNome($nome);
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $email_filtrado = filter_var($email, FILTER_SANITIZE_EMAIL);
        $this->email = $email_filtrado;
    }
    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }


    public function logar(){
        if($this->email == "teste@teste.com" and $this->senha == "123456"){
            echo "logado com sucesso";
        }else{
            echo "dados inválidos";
        }
    }

}

$logar = new Login("teste@teste.com", "123456", "Gelson Ferreira");
$logar->logar();
echo $logar->getNome();




