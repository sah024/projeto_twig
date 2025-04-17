<?php
# usuario_adc.php
require('inc/banco.php');

$user = $_POST['user'] ?? null;
$senha = $_POST['senha'] ?? null;

if ($user && $senha){
    $query = $pdo->prepare('INSERT INTO usuarios (user, senha) VALUES (:user, :senha)');
    $binds = [
        ":user" => $user,
        ':senha'=> password_hash($senha, PASSWORD_DEFAULT),
    ];
    $query->execute($binds);
}

header('location:usuarios.php');