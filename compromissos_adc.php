<?php
# compras_adc.php
require('inc/banco.php');

$compromisso = $_POST['compromisso'] ?? null;
$data = $_POST['data'] ?? null;

if ($compromisso){

    $query = $pdo->prepare('INSERT INTO compromissos (compromisso, data) VALUES (:compromisso, :data)');

    $query->bindValue(':compromisso', $compromisso);
    $query->bindValue(':data', $data);
    
    $query->execute();
}

header('location:compromissos.php');