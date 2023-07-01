<?php

$dbName = 'dadosExcel';
$dbUser = 'root';
$dbPassword = '';
$dbHost = 'localhost';

try {

    $pdo = new PDO('mysql:dbname=' . $dbName . ';host=' . $dbHost, $dbUser, $dbPassword);
} catch (PDOException $e) {

    echo 'Erro ao conectar com o banco de dados: ' . $e->getMessage();
}




// $sql = $pdo->query("SELECT * FROM dados");

// $dados = $sql->fetchAll(PDO::FETCH_ASSOC);

// print_r($dados);
