<?php
//index.php
//Carrega o carregador do Twig
require_once('twig_carregar.php');

//Mostra o template na tela
echo $twig->render('index.html', [
    'fruta' => 'Abacaxi',
]);