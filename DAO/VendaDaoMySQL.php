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
        $arr = array();

        $sql = $this->pdo->query("SELECT * FROM dados");

        if ($sql->rowCount() > 0) {
            $data = $sql->fetchAll();
            foreach($data as $item) {
                $venda = new Venda;
                $venda->setNfe($item['nfe']);
                $venda->setNumVenda($item['numero_venda']);
                $venda->setComprador($item['comprador']);
                $venda->setPrecoVenda($item['preco_venda']);
                $venda->setPlataforma($item['plataforma']);
                $venda->setDestino($item['destino']);
                $venda->setTarifa($item['tarifa']);
                $venda->setVendedor($item['vendedor']);
                $venda->setData($item['data']);
                $venda->setEstado($item['estado']);

                $arr[] = $venda;
            }
        }
        return $arr;
    }
    public function buscaPorVenda($nVenda)
    {
    }
    public function buscaPorData($data)
    {
    }
}
