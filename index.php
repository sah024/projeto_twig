<?php
//index.php
//Carrega o carregador do Twig
require_once('twig_carregar.php');

if(isset($_SESSION["usuario"])){
    //Mostra o template na tela
    echo $twig->render('index.html', [
        'fruta' => 'Abacaxi',
    ]);
} else {
    header("location:login.php");
}