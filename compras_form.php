<?php
# compras_edit.php
require_once('twig_carregar.php');
require('inc/banco.php');

if(isset($_SESSION["usuario"])){
    $id = $_GET['id'];
    echo $twig->render('form_compras.html', [
        'id' => $id,
    ]);
} else {
    header("location:login.php");
}