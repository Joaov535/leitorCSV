<?php 

require './models/Tabela.php';

class TabelaDaoMySQL implements Tabela {

    private $pdo;

    public function __construct(PDO $driver)
    {
        $this->pdo = $driver;
    }

    public function insere()
    {
        
    }
}

?>