<?php
class dad
{

    function dad()
    {

        // implemente alguma lógica

    }
}



class child extends dad
{

    function child()
    {

        echo "Eu sou a classe <b>", get_parent_class($this), "'s </b>filho<br>";
    }
}



class child2 extends dad
{

    function child2()
    {

        echo "Eu também sou a classe <b>", get_parent_class('child2'), "'s </b>filho<br>";
    }
}



$foo = new child();

$bar = new child2();