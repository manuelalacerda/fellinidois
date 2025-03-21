<h2>PG DESATIVAR</h2>

<?php

require_once('class/clientes.php');

$id = $_GET['id'];

$cliente = new ClientesClass();
$cliente->idCliente = $id;
$cliente->Desativar();

?>