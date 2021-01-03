<?php

use classes\Produto;

require "classes/Produtos.php";
require "models/Produtos.php";

use models\Produto as productModel;
use classes\Produto as productClass;

//$produtos = new \classes\Produto();
$produtos = new productModel();
$produtos->mostrarDetalhes();

echo "<br>";

$produtos = new productClass();
$produtos->mostrarDetalhes();
