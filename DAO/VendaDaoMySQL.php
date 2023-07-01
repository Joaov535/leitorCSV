<?php

require './models/Venda.php';

class VendaDaoMySQL implements VendaDAO
{
    private $pdo;

    public function __construct(PDO $driver)
    {
        $this->pdo = $driver;
    }

    public function insere(Venda $array)
    {
        $sql = $this->pdo->prepare("INSERT INTO dados (nfe, numero_venda, comprador, preco_venda, plataforma, destino, tarifa, vendedor, data, estado) VALUES(:nfe, :venda, :comprador, :preco, :plataforma, :destino, :tarifa, :vendedor, :data, :estado)");

        $sql->bindValue(':nfe', $array->getNfe());
        $sql->bindValue(':venda', $array->getNumVenda());
        $sql->bindValue(':comprador', $array->getComprador());
        $sql->bindValue(':preco', $array->getPrecoVenda());
        $sql->bindValue(':plataforma', $array->getPlataforma());
        $sql->bindValue(':destino', $array->getDestino());
        $sql->bindValue(':tarifa', $array->getTarifa());
        $sql->bindValue(':vendedor', $array->getVendedor());
        $sql->bindValue(':data', $array->getData());
        $sql->bindValue(':estado', $array->getEstado());

        $sql->execute();
    }

    public function buscaTodos()
    {
    }
    public function buscaPorVenda($nVenda)
    {
    }
    public function buscaPorData($data)
    {
    }
}
