<?php 

abstract class Banco {

    protected $saldo;
    protected $limiteSaque;
    protected $juros;

    public function setSaldo($s){
        $this->saldo = $s;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    abstract protected function sacar($s);

    abstract protected function depositar($d);



}

class BFA extends Banco {
    public function sacar($s){
        $this->saldo -= $s;
        echo "<hr> Sacou: ".$s;
    }

    public function depositar($d){
        $this->saldo += $d;
        echo "<hr> Depositou: " . $d;
    }

}
/*
class BIC extends Banco{

    public function sacar($s){
        $this->saldo -= $s;
    }

    public function depositar($d){
        $this->saldo += $d;
    }
}
*/
$bfa = new BFA();
$bfa->setSaldo(1000);
echo "<hr> Saldo: ".$bfa->getSaldo();
$bfa->sacar(250);
echo "<hr> Saldo: " . $bfa->getSaldo();
$bfa->depositar(578);
echo "<hr> Saldo: " . $bfa->getSaldo();