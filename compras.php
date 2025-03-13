<?php
//compras.php
require_once('twig_carregar.php');
echo $twig->render('compras.html', [
    'titulo' => 'Compras',
]);