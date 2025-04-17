<?php
# compras_edit.php
require_once('twig_carregar.php');
require('inc/banco.php');

if(isset($_SESSION["usuario"])){
    $id = $_GET['id'];
    
    echo $twig->render('form_compromissos.html', [
    'id' => $id,
    'compromissos' => $compromisso
    ]);
} else {
    header("location:login.php");
}
