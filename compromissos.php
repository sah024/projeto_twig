<?php
#horario.php
require_once('twig_carregar.php');
require('inc/banco.php');

use Carbon\Carbon;

if(isset($_SESSION["usuario"])){
    if($_GET['ordem'] ?? null){
        if($_GET['ordem'] == 1){
            $dados = $pdo->query('SELECT * FROM compromissos ORDER BY data ASC');
        } else if($_GET['ordem'] == 2) {
            $dados = $pdo->query('SELECT * FROM compromissos ORDER BY data DESC');
        } else if($_GET['ordem'] == 3) {
            $dados = $pdo->query('SELECT * FROM compromissos ORDER BY compromisso ASC');
        } else if($_GET['ordem'] == 4) {
            $dados = $pdo->query('SELECT * FROM compromissos ORDER BY compromisso DESC');
        }
    }else{
        $dados = $pdo->query('SELECT * FROM compromissos');
    }
    
    $compromisso = $dados->fetchAll(PDO::FETCH_ASSOC);
    
    echo $twig->render('compromissos.html', [
        'titulo' => 'Compromissos',
        'compromissos' => $compromisso,
    ]);
} else {
    header("location:login.php");
}