<?php
//Carrega o carregador do Composer
require_once('vendor/autoload.php');

//Loader (quem carrega arquivos HTML)
$loader  = new \Twig\Loader\FilesystemLoader('./templates');

//Criar o objeto do Twig
$twig = new \Twig\Environment($loader);