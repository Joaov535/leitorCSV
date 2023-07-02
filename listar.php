<?php
require 'conexao.php';
require './DAO/VendaDaoMySQL.php';

$vendasDao = new VendaDaoMySQL($pdo);
$lista = $vendasDao->buscaTodos();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="tabela">
        <table>
            <thead>
                <tr>
                    <th>NFE</th>
                    <th>Número da venda</th>
                    <th>Comprador</th>
                    <th>Preço da Venda</th>
                    <th>Plataforma</th>
                    <th>Destino</th>
                    <th>Tarifa</th>
                    <th>Vendedor</th>
                    <th>Data</th>
                    <th>Estado</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lista as $vendas) : ?>
                    <tr>
                        <td><?= $vendas->getNfe(); ?></td>
                        <td><?= $vendas->getNumVenda(); ?></td>
                        <td><?= $vendas->getComprador(); ?></td>
                        <td><?= $vendas->getPrecoVenda(); ?></td>
                        <td><?= $vendas->getPlataforma(); ?></td>
                        <td><?= $vendas->getDestino(); ?></td>
                        <td><?= $vendas->getTarifa(); ?></td>
                        <td><?= $vendas->getVendedor(); ?></td>
                        <td><?= $vendas->getData(); ?></td>
                        <td><?= $vendas->getEstado(); ?></td>
                        <td>...</td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>

</html>