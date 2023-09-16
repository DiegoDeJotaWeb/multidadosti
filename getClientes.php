<?php
require_once('DataRequest.php'); 

$cliente = new DataRequest();

header('Content-Type: application/json');

$dadosCliente = $cliente->dadosClientes('');

echo json_encode($dadosCliente);
?>