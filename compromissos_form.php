<?php
# compras_edit.php
require_once('twig_carregar.php');
require('inc/banco.php');

$id = $_GET['id'];


echo $twig->render('form_compromissos.html', [
    'id' => $id,
    'compromissos' => $compromisso
]);