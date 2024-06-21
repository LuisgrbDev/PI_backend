<?php
include_once("backend/config/conexao.php");
include_once("backend/controller/controllerEvento.php");
include_once("backend/model/modelEvento.php");

$controllerEventos = new controllerEvento();
$resultado =$controllerEventos->listarEvento();
$msg = array("Eventos" => $resultado);

echo json_encode($msg);





?>