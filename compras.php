<?php
//compras.php
require_once('twig_carregar.php');
require('inc/banco.php');

if(isset($_SESSION["usuario"])){
    //Busca as compras no banco
    $dados = $pdo->query('SELECT * FROM compras');

    $comp = $dados->fetchAll(PDO::FETCH_ASSOC);

    echo $twig->render('compras.html', [
        'titulo' => 'Compras',
        'compras' => $comp,
    ]);
} else {
    header("location:login.php");
}