<?php
# compras_dlt.php
require('inc/banco.php');

$item = $_GET['id'];

//Prepara consulta
$query = $pdo->prepare('DELETE FROM compras WHERE id = :id');

//Associa os valores dentro da consulta
$query->bindValue(':id', $item);

//Executa consulta
$query->execute();

header('location:compras.php');