<?php
require_once('DataRequest.php'); 
header('Content-Type: application/json');
$fornecedor = new DataRequest();
$dadosFornecedor = $fornecedor->DadosFornecedores('');
echo json_encode($dadosFornecedor);
?>