<?php 
//vamos utilizar o padrão DAO (data access object) -> que serve para separa a lógica do acesso aos dados
require_once 'vendor/autoload.php';

$produto = new \App\Model\Produto();
$produtoDao = new \App\Model\ProdutoDao();

###create
//$produto->__set('nome', 'LG SmartTV LG123');
//$produto->__set('descricao', '32Gb, 16Mp, 4Gb');
//var_dump($produto);
//
//
//$produtoDao->create($produto);


###read
//var_dump($produtoDao->read());
//$produtoDao->read();

//foreach($produtoDao->read() as $dado_produto){
//    echo $dado_produto['id'] . '<br>' . $dado_produto['nome'].'<br>'.$dado_produto['descricao'].'<hr>';
//}

###updadte
//$produto->__set('id', '3');
//$produto->__set('nome', 'Samsung galaxy M10x');
//$produto->__set('descricao', '32Gb, 16Mp, 4Gb');
//
//var_dump($produto);

//$produtoDao->update($produto);
//
//foreach ($produtoDao->read() as $dado_produto) {
//    echo $dado_produto['id'] . '<br>' . $dado_produto['nome'] . '<br>' . $dado_produto['descricao'] . '<hr>';
//}

###delete
//$produtoDao->delete(5);

foreach ($produtoDao->read() as $dado_produto) {
    echo $dado_produto['id'] . '<br>' . $dado_produto['nome'] . '<br>' . $dado_produto['descricao'] . '<hr>';
}
?>