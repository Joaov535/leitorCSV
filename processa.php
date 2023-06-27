<?php 

require './models/CsvProcessor.php';


$arquivo = $_FILES['arquivo'];

$fileProcessor = new CsvProcessor($arquivo);
$fileProcessor->processarArquivo();
$dadosProcessados = $fileProcessor->getDadosProcessados();

echo '<pre>';
var_dump($dadosProcessados);
echo '</pre>';




// var_dump($arquivo);

// if($arquivo['type']== 'text/csv') {

//     $dadosArquivo = fopen($arquivo['tmp_name'], 'r');

//     $arrLinhas = array();

//     while($linha = fgetcsv( $dadosArquivo, 1000, ',')) {

//         $arrLinhas[] = $linha;
//     }
// } else {
//     echo 'necessario arquivo o formato CSV';
// }

// // Pega o nome das colunas
// $header = array_shift($arrLinhas);

// // muda os índices para os nomes das colunas
// foreach($arrLinhas as &$arr) {
//     $arr = array_combine($header, $arr);
// }



// // echo '<pre>';
// print_r($arrLinhas);
// // echo '</pre>';
