<h2>PG DESATIVAR</h2>

<?php

require_once('class/depoimentos.php');

$id = $_GET['id'];

$depoimentos = new DepoimentoClass();
$depoimentos->idDepoimento = $id;
$depoimentos->Desativar();

?>