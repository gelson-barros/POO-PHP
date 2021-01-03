<?php

require 'config.php';
echo DIRPAGE."<br>";
echo $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
echo "<br>";
echo $urlCompleta = DIRPAGE. $url;
echo "<br>";
//Para evitar o teste no servidor com a barra invertida no caminho DIRPAGE
if (substr(DIRPAGE, -1) == '/') {
    //caminho DIRPAGE
    echo "com /";
} else {
    //caminho DIRPAGE
    echo "sem /";
}
$routes['home'] = array(
    'route' => '/',
    'controller' => 'LoginController',
    'action' => 'login',
);

$routes['autenticar'] = array(
    'route' => '/autenticar',
    'controller' => 'AuthController',
    'action' => 'autenticar',
);

$routes['sair'] = array(
    'route' => '/sair',
    'controller' => 'AuthController',
    'action' => 'sair',
);

$routes['painel_control'] = array(
    'route' => '/painel_control',
    'controller' => 'PainelController',
    'action' => 'painelControl',
);

$routes['cadastrar_usuario'] = array(
    'route' => '/cadastrar_usuario',
    'controller' => 'UsuarioController',
    'action' => 'cadastrarUsuario',
);

$routes['inserir_usuario'] = array(
    'route' => '/inserir_usuario',
    'controller' => 'UsuarioController',
    'action' => 'inserirUsuario',
);

$routes['listar_usuario'] = array(
    'route' => '/listar_usuario',
    'controller' => 'UsuarioController',
    'action' => 'listarUsuario',
);

//var_dump($routes);
?>