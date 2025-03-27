<?php
# compras_dlt.php
require('inc/banco.php');

$compromisso = $_GET['id'];

$query = $pdo->prepare('DELETE FROM compromissos WHERE id = :id');
$query->bindValue(':id', $compromisso);
$query->execute();

header('location:compromissos.php');