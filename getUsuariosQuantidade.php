<?php
require_once('DataRequest.php'); 
$usuario = new DataRequest();
$qtdUsuarios = $usuario->dadosUsuarios('c');
?>