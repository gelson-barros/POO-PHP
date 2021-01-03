<?php
class ConstructorDestructor{
    private $varMethod;
    public function __construct(){
        $this->varMethod = "Constructor()";
        echo "Método {$this->varMethod}<br>";
    }

    public function getVarMethod(){
        return $this->varMethod;
    }

    public function __destruct(){
        $this->varMethod = "Destructor()";
        echo "Método {$this->varMethod}<br>";
    }
}

$consDestructor = new ConstructorDestructor();

//echo $consDestructor->getVarMethod();
unset($consDestructor); //aqui foi destruida a instancia
//echo $consDestructor->getVarMethod();//ja foi destruida
echo '<br>';

class ConstructorDestructorFilho extends ConstructorDestructor{
    public function __construct(){
        parent::__construct();
        echo "Método Filho Constructor<br>";
    }


    public function __destruct(){
        parent::__destruct();
        echo "Método Filho Destructor<br>";
    }
}

$consDestructorFilho = new ConstructorDestructorFilho();