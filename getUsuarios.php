<?php
require_once('DataRequest.php'); 
header('Content-Type: application/json');
$usuairo = new DataRequest();
$dadosUsuairo = $usuairo->dadosUsuarios('');
echo json_encode($dadosUsuairo);
?>