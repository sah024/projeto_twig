<?php
#horario.php
require('twig_carregar.php');
/**
 * Montarum Página no Twig chamada "Horário"
 * Será possível acessar pelo menu
 * Deverá mostrar a data de hoje e a data de amanhã
 */

use Carbon\Carbon;

if(isset($_SESSION["usuario"])){
    echo $twig->render('horario.html', [
        'titulo' => 'Horário',
        'dataAtual' => Carbon::now(),
        'dataAmanha' => Carbon::now()->addDay(),
    ]);
} else {
    header("location:login.php");
}