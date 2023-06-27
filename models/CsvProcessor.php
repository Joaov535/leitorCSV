<?php 

class CsvProcessor {
    private $arrLinhas;
    private $arquivo;

    public function __construct($file)
    {
        $this->arquivo = $file;
        $this->arrLinhas = array();
    }

    public function processarArquivo() {
        if($this->arquivo['type']== 'text/csv') {

            $dadosArquivo = fopen($this->arquivo['tmp_name'], 'r');

            while($linha = fgetcsv( $dadosArquivo, 1000, ',')) {
                $this->arrLinhas[] = $linha;
            }
            fclose($dadosArquivo);
        } else {
            echo 'Necessário arquivo no formato .csv';
        }
    }

    public function getDadosProcessados() {
        // Remove o primeiro array que contém o nome das colunas
        $header = array_shift($this->arrLinhas);

        foreach($this->arrLinhas as &$arr) {
            $arr = array_combine($header, $arr);
        }

        return $this->arrLinhas;
    }
}
