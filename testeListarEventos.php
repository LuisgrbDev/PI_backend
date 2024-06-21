<?php
include_once("backend/config/conexao.php");
include_once("backend/controller/controllerEventos.php");
include_once("backend/model/modelEventos.php");

$controllerEventos = new controllerEventos();
$resultado =$controllerEventos->listarEventos();
$msg = array("Eventos" => $resultado);

echo json_encode($msg);

?>