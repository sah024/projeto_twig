<?php
session_start();

require_once('twig_carregar.php');
require('inc/banco.php');

$user = $_POST["user"] ?? null;
$senha = $_POST["senha"] ?? null;

if ($user && $senha){
    $password = password_hash($senha, PASSWORD_DEFAULT);

    $dados = $pdo->prepare('SELECT * FROM usuarios where user = :user and senha = :senha');
    $binds = [
        ":user" => $user,
        ":senha" => $password,
    ];
    $dados->execute();
    $comp = $dados->fetchAll(PDO::FETCH_ASSOC);
}