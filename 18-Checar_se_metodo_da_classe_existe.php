<?php
class Foo1
{

    public function bar()
    {

        echo "Eu sou private Foo1::bar()<br>";
    }
}



class Foo2
{

    private function bar()
    {

        echo "Eu sou public Foo2::bar()<br>";
    }
}



$f1 = new Foo1;

$f2 = new Foo2;
echo "<pre>";
print_r(get_class_methods($f2));
echo "</pre>";

if (is_callable(array($f1, "bar"))) {

    echo "Foo1::bar() é acessível<br>";
} else {

    echo "Foo1::bar() não é acessível<br>";
}

if (is_callable(array($f2, "bar"))) {

    echo "Foo2::bar() é acessível<br>";
} else {

    echo "Foo2::bar() não é acessível<br>";
}

if (in_array("bar", get_class_methods($f1))) {

    echo "Foo1::bar() é acessível<br>";
} else {

    echo "Foo1::bar() não é acessível<br>";
}

if (in_array("bar", get_class_methods($f2))) {

    echo "Foo2::bar() é acessível<br>";
} else {

    echo "Foo2::bar() não é acessível<br>";
}
