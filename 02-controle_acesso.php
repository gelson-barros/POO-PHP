<?php
class Acessos{
    public $varPublic = "Variavel Pública";
    protected $varProtected = "Variavel Protected";
    private $varPrivate = "Variavel Private";

    public function getPublic(){
        return $this->varPublic;
    }

    public function getProtected(){
        return $this->varProtected;
    }

    public function getPrivate(){
        return $this->varPrivate;
    }

    public function getMetodoPrivate(){
        return Acessos::getPrivate();
    }
}

$especificacaoAcesso = new Acessos();
//echo $especificacaoAcesso->varPublic;//certo
//echo $especificacaoAcesso->varProtected;//fatal error
//echo $especificacaoAcesso->varPrivate;//fatal error
//echo $especificacaoAcesso->getPublic();//certo
//echo $especificacaoAcesso->getProtected();//certo
//echo $especificacaoAcesso->getPrivate();//certo
//echo $especificacaoAcesso->getMetodoPrivate();//certo
?>