<?php
#usuarios.php
require_once('twig_carregar.php');
require('inc/banco.php');

use Carbon\Carbon;

if(isset($_SESSION["usuario"])){
    $dados = $pdo->query('SELECT user FROM usuarios');
    
    $user = $dados->fetchAll(PDO::FETCH_ASSOC);
    
    echo $twig->render('usuarios.html', [
        'titulo' => 'Usuários',
        'usuario' => $user,
    ]);
} else {
    header("location:login.php");
}