<?php

require_once './models/CsvProcessor.php';
require_once './DAO/VendaDaoMySQL.php';
require_once './models/Venda.php';
require_once './conexao.php';

$arquivo = $_FILES['arquivo'];

$fileProcessor = new CsvProcessor($arquivo);
$fileProcessor->processarArquivo();
$dados = $fileProcessor->getDadosProcessados();

foreach ($dados as $valores) {
    $venda = new Venda();

    $venda->setNfe($valores['nfe']);
    $venda->setNumVenda($valores['numVenda']);
    $venda->setComprador($valores['comprador']);
    $venda->setPrecoVenda($valores['precoVenda']);
    $venda->setPlataforma($valores['plataforma']);
    $venda->setDestino($valores['destino']);
    $venda->setTarifa($valores['tarifa']);
    $venda->setVendedor($valores['vendedor']);
    $venda->setData($valores['data']);
    $venda->setEstado($valores['estado']);

    $vendaDaoMysql = new VendaDaoMySQL($pdo);
    $vendaDaoMysql->insere($venda);
}



// echo '<pre>';
// var_dump($fileProcessor);
// echo '</pre>';




// var_dump($arquivo);
// // echo '<pre>';
// print_r($arrLinhas);
// // echo '</pre>';
