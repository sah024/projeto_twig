<?php
# compras_edit.php
require_once('twig_carregar.php');
require('inc/banco.php');

$id = $_GET['id'];
echo $twig->render('form_compras.html', [
    'id' => $id,
]);