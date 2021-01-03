<?php
class Foo
{
    var $myVar;
}



class Foo_Bar extends Foo
{
    var $myVar2;
}



echo class_exists('Foo') . "<br>"; //true

echo class_exists('foo') . "<br>"; //true

echo class_exists('Foo_Bar') . "<br>"; // true

echo get_parent_class('Foo_Bar') . "<br>"; // foo (NOTE: NOT Foo!)
