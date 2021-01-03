<?php
#Arquivos directórios raízes
$pastaInterna = "MVC_web_designe_em_foco/";
//caminho de visualização da url 
define('DIRPAGE', "http://{$_SERVER['HTTP_HOST']}/{$pastaInterna}");

//Para evitar o teste no servidor com a barra invertida no caminho absoluto fisico
if (substr($_SERVER['DOCUMENT_ROOT'], -1) == '/') {
    //caminho absoluto fisico
    define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}{$pastaInterna}");
} else {
    //caminho absoluto fisico
    define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}/{$pastaInterna}");
}

#directórios especificos
//imagem
//define('DIRIMG', "http://{$_SERVER['HTTP_HOST']}/{$pastaInterna}public/img/");
define('DIRIMG', DIRPAGE . "public/img/");
//css
define('DIRCSS', DIRPAGE . "public/css/");
//js
define('DIRJS', DIRPAGE . "public/js/");
//audio
define('DIRAUDIO', DIRPAGE . "public/audio/");
//fontes
define('DIRFFONTES', DIRPAGE . "public/fontes/");
//video
define('DIRVIDEO', DIRPAGE . "public/video/");
//design
define('DIRDESIGN', DIRPAGE . "public/design/");
//admin
define('DIRADIM', DIRPAGE . "public/admin/");

#Acesso ao banco de dados
define('HOST', "localhost");
define('DB', "sistema");
define('USER', "root");
define('PASS', "");
