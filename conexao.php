<?php 

$dbName = 'dadosExcel';
$dbUser = 'root';
$dbPassword = '';
$dbHost = 'localhost';

$pdo = new PDO('mysql:dbname='.$dbName.';host='.$dbHost, $dbUser, $dbPassword);

$sql = $pdo->query("SELECT * FROM dados");

$dados = $sql->fetchAll(PDO::FETCH_ASSOC);

print_r($dados);

?>