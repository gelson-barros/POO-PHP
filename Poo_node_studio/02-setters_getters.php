<?php 


class Login{
    private $email;
    private $senha;

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
    public function logar(){
        if($this->email == "teste@teste.com" and $this->senha == "123456"){
            echo "logado com sucesso";
        }else{
            echo "dados inválidos";
        }
    }

}

$logar = new Login();
$logar->setEmail("teste()/@teste.com");
$logar->setSenha("123456");
$logar->logar();




