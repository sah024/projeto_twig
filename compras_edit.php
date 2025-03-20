<?php
# compras_edit.php
require('inc/banco.php');

$id = $_POST['id'];
$item = $_POST['item'];

//Prepara consulta
$query = $pdo->prepare('UPDATE compras SET item = :it WHERE id = :id');

$dados = [
    ':id' => $id,
    ':it' => $item,
];

//Associa os valores dentro da consulta
$query->execute($dados);

//Executa consulta

header('location:compras.php');