<?php
require_once('DataRequest.php'); 
$cliente = new DataRequest();
$qtdClientes = $cliente->dadosClientes('c');
?>