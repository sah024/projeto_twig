<?php


require_once('twig_carregar.php');
require('inc/banco.php');

$user = $_POST["user"] ?? null;
$senha = $_POST["senha"] ?? null;

if ($user && $senha){
    $dados = $pdo->prepare('SELECT * FROM usuarios where user = :user');
    $binds = [
        ":user" => $user,
    ];
    $dados->execute($binds);
    $bdR = $dados->fetch();

    if($bdR && password_verify($senha, $bdR["senha"])){
        $_SESSION["usuario"] = $bdR["user"];
        header("location:index.php");
    }
}

echo $twig->render("login.html",[]);