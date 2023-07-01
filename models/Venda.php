<?php

class Venda
{
    private $nfe;
    private $numVenda;
    private $comprador;
    private $precoVenda;
    private $plataforma;
    private $destino;
    private $tarifa;
    private $vendedor;
    private $data;
    private $estado;

    public function getNfe()
    {
        return $this->nfe;
    }

    public function setNfe($nfe)
    {
        $this->nfe = $nfe;
    }

    public function getNumVenda()
    {
        return $this->numVenda;
    }

    public function setNumVenda($numVenda)
    {
        $this->numVenda = $numVenda;
    }

    public function getComprador()
    {
        return $this->comprador;
    }

    public function setComprador($comprador)
    {
        $this->comprador = $comprador;
    }

    public function getPrecoVenda()
    {
        return $this->precoVenda;
    }

    public function setPrecoVenda($preco)
    {
        $this->precoVenda = $preco;
    }

    public function getPlataforma()
    {
        return $this->plataforma;
    }

    public function setPlataforma($plataforma)
    {
        $this->plataforma = $plataforma;
    }

    public function getDestino()
    {
        return $this->destino;
    }

    public function setDestino($destino)
    {
        $this->destino = $destino;
    }

    public function getTarifa()
    {
        return $this->tarifa;
    }

    public function setTarifa($tarifa)
    {
        $this->tarifa = $tarifa;
    }

    public function getVendedor()
    {
        return $this->vendedor;
    }

    public function setVendedor($vendedor)
    {
        $this->vendedor = $vendedor;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;
    }
}


interface VendaDAO
{
    public function insere(Venda $array);
    public function buscaTodos();
    public function buscaPorVenda($nVenda);
    public function buscaPorData($data);
}
