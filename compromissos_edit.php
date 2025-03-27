<?php
# compras_edit.php
require('inc/banco.php');

$id = $_POST['id'];
$compromisso = $_POST['compromisso'];

$query = $pdo->prepare('UPDATE compromissos SET compromisso = :compromisso WHERE id = :id');
$dados = [ ':id' => $id, ':compromisso' => $compromisso, ];
$query->execute($dados);

header('location:compromissos.php');